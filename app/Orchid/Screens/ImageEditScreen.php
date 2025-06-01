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
use Orchid\Attachment\Models\Attachment;

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

                Attach::make('image.attachment')
                    ->title('Image')
                    ->groups('image') // Optional, for grouping
                    ->maxFiles(1)
                    ->acceptedFiles('image/*')
                    ->help('Upload your image file'),

                    // Upload::make('image.attachment')
                    // ->title('Image')
                    // ->acceptedFiles('image/*')
                    // ->maxFiles(1)
                    // ->help('Upload your image file'),


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

   public function save(Request $request, Image $image)
{
    $data = $request->validate([
        'image.attachment' => 'nullable',
        'image.image_type' => 'required|in:blog,product',
        'image.blog_id' => 'nullable|exists:blogs,id',
        'image.produit_id' => 'nullable|exists:produits,id',
    ]);

    $imageData = $data['image'];

    if (isset($imageData['attachment'])) {
    $attachmentId = $imageData['attachment'];
    $attachment = Attachment::find($attachmentId);

    if ($attachment) {
        $sourcePath = storage_path("app/public/{$attachment->path}{$attachment->name}.{$attachment->extension}");

        // Set the custom folder path based on type
        $folder = $imageData['image_type'] === 'blog' ? 'images/blog' : 'images/product';
        $targetDir = storage_path("app/public/{$folder}");
        $targetPath = "{$targetDir}/{$attachment->name}.{$attachment->extension}";

        // Make sure the directory exists
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        // Copy or move the file
        copy($sourcePath, $targetPath);

        // Save the new path to the DB
        $image->image = "/storage/{$folder}/{$attachment->name}.{$attachment->extension}";
    }
}

    $image->blog_id = $imageData['blog_id'] ?? null;
    $image->produit_id = $imageData['produit_id'] ?? null;

    $image->save();

    Toast::info('Image uploaded successfully.');
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

    /**
     * The permissions required to access this screen.
     */
    public function permission(): ?iterable
    {
        return [
            'platform.images.view'
        ];
    }

}
