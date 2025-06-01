<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use App\Models\Categorie;
use Orchid\Crud\Resource;
use Illuminate\Validation\Rule;
use Orchid\Screen\Fields\Input;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\Attach;
use Orchid\Support\Facades\Toast;
use Orchid\Crud\Filters\DefaultSorted;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Models\Attachment;

class CategorieResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Categorie::class;

    public static function icon(): string
    {
        return 'bs.layers';
    }
    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('categorie')
                ->title('Categorie')
                ->placeholder('Categorie...'),

            Attach::make('image')
                ->title('Image')
                ->groups('image') // Optional, for grouping
                ->maxFiles(1)
                ->acceptedFiles('image/*')
                ->help('Upload your image file'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('categorie'),

            TD::make('image', 'Image')
            ->render(function ($model) {
                if ($model->image) {
                    return "<img src='{$model->image}' alt='Categorie Image' style='max-width: 80px; max-height: 80px; object-fit: contain;' />";
                }
                return '--';
            }),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('id'),
            Sight::make('categorie'),

             Sight::make('image')
            ->render(function ($model) {
                if ($model->image) {
                    return "<img src='{$model->image}' alt='Categorie Image' style='max-width: 150px; max-height: 150px; object-fit: contain;' />";
                }
                return '--';
            }),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [new DefaultSorted('id', 'desc'),];
    }

    /**
     * Get the validation rules that apply to save/update.
     *
     * @return array
     */
    public function rules(Model $categorie): array
    {
        return [
            'image' => 'nullable',
            'categorie' => [
                'required',
                Rule::unique(self::$model, 'categorie')->ignore($categorie),
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'categorie.required' => 'Le champ catégorie est obligatoire.',
            'categorie.unique' => 'Cette catégorie existe déjà.',
        ];
    }

    /**
     * Get the number of models to return per page
     *
     * @return int
     */
    public static function perPage(): int
    {
        return 10;
    }

    public static function displayInNavigation(): bool
    {
        return false;
    }

    public function onSave(ResourceRequest $request, Model $model)
    {
        $imageData = $request->input('image'); // Expecting attachment ID

        if ($imageData) {
            $attachment = Attachment::find($imageData);

            if ($attachment) {
                $sourcePath = storage_path("app/public/{$attachment->path}{$attachment->name}.{$attachment->extension}");
                $folder = "images/categorie"; // custom folder for categories
                $targetDir = storage_path("app/public/{$folder}");

                if (!file_exists($targetDir)) {
                    mkdir($targetDir, 0755, true);
                }

                $targetPath = "{$targetDir}/{$attachment->name}.{$attachment->extension}";

                copy($sourcePath, $targetPath);

                $model->image = "/storage/{$folder}/{$attachment->name}.{$attachment->extension}";
            }
        }

        $model->categorie = $request->input('categorie');
        $model->save();

        Toast::info('Categorie saved with image.');

        return redirect()->route('platform.resource.list', ['resource' => static::uriKey()]);
    }

    public static function permission(): ?string
    {
        return 'platform.categories.view';
    }
}
