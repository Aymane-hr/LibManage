<?php

namespace App\Orchid\Screens;

use App\Models\Blog;
use App\Models\Image;
use App\Models\Produit;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Attachment\File;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ImageEditScreen extends Screen
{
    public $image;

    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(Image $image): iterable
    {
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
        return 'Create or edit image for blogs and products';
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
        $imageType = request('image.image_type') ?? ($this->image->exists ? $this->getImageType() : null);

        return [
            Layout::rows([
                Upload::make('image.attachment')
                    ->title('Image')
                    ->acceptedFiles('image/*')
                    ->maxFiles(1)
                    ->help('Upload your image file'),

                Select::make('image.image_type')
                    ->title('Image Type')
                    ->options([
                        'blog' => 'Blog',
                        'product' => 'Product',
                    ])
                    ->empty('Select image type')
                    ->required()
                    ->value($imageType)
                    ->help('Choose whether this image is for a blog or product'),

                Select::make('image.blog_id')
                    ->title('Blog')
                    ->fromModel(Blog::class, 'titre', 'id')
                    ->empty('Select a blog')
                    ->canSee($imageType === 'blog')
                    ->required($imageType === 'blog')
                    ->help('Select the blog this image belongs to'),

                Select::make('image.produit_id')
                    ->title('Product')
                    ->fromModel(Produit::class, 'designation', 'id')
                    ->empty('Select a product')
                    ->canSee($imageType === 'product')
                    ->required($imageType === 'product')
                    ->help('Select the product this image belongs to'),
            ]),
        ];
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
        $data = $request->validate([
            'image.attachment' => 'nullable',
            'image.image_type' => 'required|in:blog,product',
            'image.blog_id' => 'nullable|exists:blogs,id',
            'image.produit_id' => 'nullable|exists:produits,id',
        ]);

        $imageData = $data['image'];

        // Handle attachment
        if (isset($imageData['attachment'])) {
            $attachment = $imageData['attachment'];
            if (is_array($attachment) && count($attachment) > 0) {
                $imageData['image'] = $attachment[0]; // Get first attachment ID
            }
            unset($imageData['attachment']);
        }

        // Clear both foreign keys first
        $imageData['blog_id'] = null;
        $imageData['produit_id'] = null;

        // Set the appropriate foreign key based on type
        if ($imageData['image_type'] === 'blog') {
            $imageData['blog_id'] = $imageData['blog_id'] ?? null;

            if (!$imageData['blog_id']) {
                Toast::error('Please select a blog.');
                return;
            }
        } elseif ($imageData['image_type'] === 'product') {
            $imageData['produit_id'] = $imageData['produit_id'] ?? null;

            if (!$imageData['produit_id']) {
                Toast::error('Please select a product.');
                return;
            }
        }

        // Remove the temporary image_type field
        unset($imageData['image_type']);

        $image->fill($imageData)->save();

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
