<?php

namespace App\Orchid\Screens;

use App\Models\Blog;
use App\Models\Image;
use App\Models\Produit;
use Orchid\Screen\Screen;
use Orchid\Attachment\File;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Attach;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Facades\Log;

class ImageEditScreen extends Screen
{
    public $image;

    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(Image $image): iterable
    {
        $this->image = $image;

        return [
            'image' => $image,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->image->exists ? 'Edit Image' : 'Create Image';
    }

    /**
     * The description displayed under the name.
     */
    public function description(): ?string
    {
        return __('Créer ou modifier l\'image pour les blogs et produits');
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
                ->icon('check')
                ->method('save'),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->image->exists)
                ->confirm('Are you sure you want to delete this image?'),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([

                Attach::make('image')
                    ->title('Image')
                    ->groups('image') // Optional, for grouping
                    ->maxFiles(1)
                    ->acceptedFiles('image/*')
                    ->help('Upload your image file'),


                Select::make('image.image_type')
                    ->title('Image Type')
                    ->options([
                        'blog' => 'Blog',
                        'product' => 'Product',
                    ])
                    ->empty('Select image type')
                    ->required()
                    ->value($this->image->exists ? $this->getImageType() : null)
                    ->help('Choose whether this image is for a blog or product'),

                Select::make('image.blog_id')
                    ->title('Blog')
                    ->fromModel(Blog::class, 'titre', 'id')
                    ->empty('Select a blog')
                    ->help('Select the blog this image belongs to'),

                Select::make('image.produit_id')
                    ->title('Product')
                    ->fromModel(Produit::class, 'designation', 'id')
                    ->empty('Select a product')
                    ->help('Select the product this image belongs to'),
            ]),

            // Use a simple view for JavaScript
            Layout::view('admin.partials.dynamic-select-script'),
        ];
    }

    public function createOrUpdate(Image $image, Request $request)
    {
        dd($request->all());
        $this->image->fill($request->get('image'))->save();

        // Get the first attachment (Orchid stores attachment IDs)
        $attachmentId = $request->input('image')[0] ?? null;

        if ($attachmentId) {
            $attachment = \Orchid\Attachment\Models\Attachment::find($attachmentId);

            if ($attachment) {
                $originalPath = storage_path("app/public/{$attachment->path}/{$attachment->name}.{$attachment->extension}");
                $newDir = storage_path('app/public/image');
                $newPath = $newDir . '/' . $attachment->name . '.' . $attachment->extension;

                if (!file_exists($newDir)) {
                    mkdir($newDir, 0755, true);
                }

                copy($originalPath, $newPath);

                // Store new path in your model
                $this->image->update([
                    'image' => '/image/' . $attachment->name . '.' . $attachment->extension,
                ]);
            }
        }

        Toast::info('Image saved!');
        return redirect()->route('platform.image.list');
    }


    /**
     * Get the current image type for existing images.
     */
    private function getImageType(): ?string
    {
        if ($this->image->blog_id) {
            return 'blog';
        } elseif ($this->image->produit_id) {
            return 'product';
        }
        return null;
    }

    /**
     * Save the image.
     */
    public function save(Request $request, Image $image)
    {
        // Get all form data
        $formData = $request->all();

        // Debug: Log the received data
        Log::info('Form data received:', $formData);

        $data = $request->validate([
            'image.attachment' => 'nullable',
            'image.image_type' => 'required|in:blog,product',
            'image.blog_id' => 'nullable|exists:blogs,id',
            'image.produit_id' => 'nullable|exists:produits,id',
        ]);

        $imageData = $data['image'];

        // Debug: Log the validated data
        Log::info('Validated image data:', $imageData);

        // Handle attachment
        if (isset($imageData['attachment'])) {
            $attachment = $imageData['attachment'];
            if (is_array($attachment) && count($attachment) > 0) {
                $imageData['image'] = $attachment[0]; // Get first attachment ID
            }
            unset($imageData['attachment']);
        }

        // Prepare data for saving
        $saveData = [];

        // Clear both foreign keys first
        $saveData['blog_id'] = null;
        $saveData['produit_id'] = null;

        // Set the appropriate foreign key based on type
        if ($imageData['image_type'] === 'blog') {
            $blogId = $imageData['blog_id'] ?? null;

            if (!$blogId) {
                Toast::error('Please select a blog.');
                return back()->withInput();
            }

            $saveData['blog_id'] = $blogId;

        } elseif ($imageData['image_type'] === 'product') {
            $productId = $imageData['produit_id'] ?? null;

            if (!$productId) {
                Toast::error('Please select a product.');
                return back()->withInput();
            }

            $saveData['produit_id'] = $productId;
        }

        // Add other fields if they exist
        if (isset($imageData['image'])) {
            $saveData['image'] = $imageData['image'];
        }

        // Debug: Log the data being saved
        Log::info('Data being saved:', $saveData);

        $image->fill($saveData)->save();

        // Sync attachments
        if (isset($data['image']['attachment'])) {
            $image->attachment()->syncWithoutDetaching($data['image']['attachment']);
        }

        Toast::info('Image saved successfully.');

        return redirect()->route('platform.images');
    }

    /**
     * Remove the image.
     */
    public function remove(Image $image)
    {
        $image->delete();

        Toast::info('Image deleted successfully.');

        return redirect()->route('platform.images');
    }
    
}
