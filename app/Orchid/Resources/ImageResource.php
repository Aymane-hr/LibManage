<?php

namespace App\Orchid\Resources;

use App\Models\Blog;
use App\Models\Image;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Orchid\Crud\Resource;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ImageResource extends Resource
{
    /**
     * The model the resource corresponds to.
     */
    public static $model = Image::class;

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(): array
    {
        return [
            Upload::make('attachment')
                ->title('Image')
                ->acceptedFiles('image/*')
                ->maxFiles(1)
                ->help('Upload your image file'),

            Select::make('image_type')
                ->title('Image Type')
                ->options([
                    'blog' => 'Blog',
                    'product' => 'Product',
                ])
                ->empty('Select image type')
                ->required()
                ->value($this->getImageType())
                ->help('Choose whether this image is for a blog or product'),

            Select::make('blog_id')
                ->title('Blog')
                ->fromModel(Blog::class, 'titre', 'id')
                ->empty('Select a blog')
                ->help('Select the blog this image belongs to'),

            Select::make('produit_id')
                ->title('Product')
                ->fromModel(Produit::class, 'designation', 'id')
                ->empty('Select a product')
                ->help('Select the product this image belongs to'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     */
    public function columns(): array
    {
        return [
            TD::make('id', 'ID')
                ->sort()
                ->cantHide(),

            TD::make('image', 'Image')
                ->render(function (Image $image) {
                    if ($image->attachment->first()) {
                        $attachment = $image->attachment->first();
                        return "<img src='{$attachment->url()}' alt='Image' style='width: 60px; height: 60px; object-fit: cover; border-radius: 4px;'>";
                    }
                    return '<span class="text-muted">Pas d\'image</span>';
                }),

            TD::make('type', 'Type')
                ->render(function (Image $image) {
                    $type = $image->type;
                    $class = $type === 'Blog' ? 'bg-info' : 'bg-success';
                    return "<span class='badge {$class}'>{$type}</span>";
                })
                ->sort(),

            TD::make('related_title', 'Related Item')
                ->render(function (Image $image) {
                    return $image->related_title;
                })
                ->sort(),

            TD::make('created_at', 'Created')
                ->render(function (Image $image) {
                    return $image->created_at->format('M d, Y H:i');
                })
                ->sort(),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     */
    public function legend(): array
    {
        return [
            Sight::make('id', 'ID'),

            Sight::make('image', 'Image')
                ->render(function (Image $image) {
                    if ($image->attachment->first()) {
                        $attachment = $image->attachment->first();
                        return "<img src='{$attachment->url()}' alt='Image' style='width: 200px; height: 200px; object-fit: cover; border-radius: 8px;'>";
                    }
                    return '<span class="text-muted">No image</span>';
                }),

            Sight::make('type', 'Type')
                ->render(function (Image $image) {
                    $type = $image->type;
                    $class = $type === 'Blog' ? 'bg-info' : 'bg-success';
                    return "<span class='badge {$class}'>{$type}</span>";
                }),

            Sight::make('related_title', 'Related Item'),

            Sight::make('created_at', 'Created')
                ->render(function (Image $image) {
                    return $image->created_at->format('M d, Y H:i');
                }),

            Sight::make('updated_at', 'Updated')
                ->render(function (Image $image) {
                    return $image->updated_at->format('M d, Y H:i');
                }),
        ];
    }

    /**
     * Get the filters available for the resource.
     */
    public function filters(): array
    {
        return [];
    }

    /**
     * Get the validation rules that apply to save/update.
     */
    public function rules(Model $model): array
    {
        return [
            'attachment' => 'nullable',
            'image_type' => 'required|in:blog,product',
            'blog_id' => 'nullable|exists:blogs,id',
            'produit_id' => 'nullable|exists:produits,id',
        ];
    }

    /**
     * Get the custom messages for validator errors.
     */
    public function validationMessages(): array
    {
        return [
            'image_type.required' => 'Please select an image type.',
            'image_type.in' => 'The image type must be either blog or product.',
            'blog_id.exists' => 'The selected blog does not exist.',
            'produit_id.exists' => 'The selected product does not exist.',
        ];
    }

    /**
     * Handle the resource save operation.
     */
    public function onSave(Request $request, Model $model)
    {
        $data = $request->validate($this->rules($model), $this->validationMessages());

        // Handle attachment
        if (isset($data['attachment'])) {
            $attachment = $data['attachment'];
            if (is_array($attachment) && count($attachment) > 0) {
                $data['image'] = $attachment[0]; // Get first attachment ID
            }
            unset($data['attachment']);
        }

        // Prepare data for saving
        $saveData = [];

        // Clear both foreign keys first
        $saveData['blog_id'] = null;
        $saveData['produit_id'] = null;

        // Set the appropriate foreign key based on type
        if ($data['image_type'] === 'blog') {
            $blogId = $data['blog_id'] ?? null;

            if (!$blogId) {
                Toast::error('Please select a blog.');
                return back()->withInput();
            }

            $saveData['blog_id'] = $blogId;

        } elseif ($data['image_type'] === 'product') {
            $productId = $data['produit_id'] ?? null;

            if (!$productId) {
                Toast::error('Please select a product.');
                return back()->withInput();
            }

            $saveData['produit_id'] = $productId;
        }

        // Add other fields if they exist
        if (isset($data['image'])) {
            $saveData['image'] = $data['image'];
        }

        $model->fill($saveData)->save();

        // Sync attachments
        if (isset($data['attachment'])) {
            $model->attachment()->syncWithoutDetaching($data['attachment']);
        }

        Toast::info('Image saved successfully.');
    }

    /**
     * Handle the resource delete operation.
     */
    public function onDelete(Model $model)
    {
        $model->delete();
        Toast::info('Image deleted successfully.');
    }

    /**
     * Get the current image type for existing images.
     */
    private function getImageType(): ?string
    {
        $model = $this->getModel();

        if (!$model || !$model->exists) {
            return null;
        }

        if ($model->blog_id) {
            return 'blog';
        } elseif ($model->produit_id) {
            return 'product';
        }

        return null;
    }

    /**
     * Get the displayable label of the resource.
     */
    public static function label(): string
    {
        return 'Images';
    }

    /**
     * Get the displayable singular label of the resource.
     */
    public static function singularLabel(): string
    {
        return 'Image';
    }


    /**
     * Get the text for the create resource toast.
     */
    public static function createToastMessage(): string
    {
        return 'Image created successfully.';
    }

    /**
     * Get the text for the update resource toast.
     */
    public static function updateToastMessage(): string
    {
        return 'Image updated successfully.';
    }

    /**
     * Get the text for the delete resource toast.
     */
    public static function deleteToastMessage(): string
    {
        return 'Image deleted successfully.';
    }

    /**
     * The description displayed under the name.
     */
    public static function description(): string
    {
        return 'Manage all images for blogs and products';
    }

    /**
     * Get the number of models to return per page
     */
    public static function perPage(): int
    {
        return 15;
    }

    /**
     * Build an "index" query for the given resource.
     */
    public static function indexQuery(Model $model, Request $request)
    {
        return $model->with(['blog', 'produit'])
            ->orderBy('created_at', 'desc');
    }

    /**
     * Additional layouts to be included in the form
     */
    public function layouts(): array
    {
        return [
            Layout::view('admin.partials.dynamic-select-script'),
        ];
    }
    /**
 * Get the resource should be displayed in the navigation
 *
 * @return bool
 */
public static function displayInNavigation(): bool
{
    return false;
}

    // Override creation text
    public static function createButtonLabel(): string
    {
        return __('Créer Image');
    }
    public static function updateButtonLabel(): string
    {
        return __('Modifier Image');
    }
    public static function deleteButtonLabel(): string
    {
        return __('Supprimer Image');
    }
}
