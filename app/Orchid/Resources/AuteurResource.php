<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Crud\Resource;
use Illuminate\Validation\Rule;
use Orchid\Screen\Fields\Input;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\Attach;
use Orchid\Support\Facades\Toast;
use Illuminate\Support\Facades\Auth;
use Orchid\Crud\Filters\DefaultSorted;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Models\Attachment;

class AuteurResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Auteur::class;

    public static function icon(): string
    {
        return 'bs.brush';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('nom')
                ->title('Nom')
                ->placeholder('Nom...'),

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
            TD::make('nom'),

            TD::make('image')
                ->render(function ($model) {
                    if ($model->image) {
                        return "<img src='{$model->image}' alt='Image' style='max-height: 60px; max-width: 60px; object-fit: contain;' />";
                    }
                    return '--';
                })
                ->width('80px')
                ->align('center'),

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
            Sight::make('nom'),
            Sight::make('image')
                ->render(function ($model) {
                    if ($model->image) {
                        return "<img src='{$model->image}' alt='Image' style='max-width: 150px; max-height: 150px; object-fit: contain;' />";
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
    public function rules(Model $auteur): array
    {
        return [
            'image' => 'nullable',
            'nom' => [
                'required',
                'string',
                'max:50',
                Rule::unique(self::$model, 'nom')->ignore($auteur),
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 50 caractères.',
            'nom.unique' => 'Ce nom existe déjà.',
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
        // Validate inputs
        $data = [
            'image' => $request->input('image'),
            'nom' => $request->input('nom'), // Added auteur option if needed
        ];

        $imageData = $data['image'] ?? null;
        if ($imageData) {
            $attachmentId = $imageData;
            $attachment = Attachment::find($attachmentId);

            if ($attachment) {
                // Original file path
                $sourcePath = storage_path("app/public/{$attachment->path}{$attachment->name}.{$attachment->extension}");

                // Custom folder path: store under auteur folder with user_id
                $folder = "images/auteur";
                $targetDir = storage_path("app/public/{$folder}");

                // Make sure directory exists
                if (!file_exists($targetDir)) {
                    mkdir($targetDir, 0755, true);
                }

                $targetPath = "{$targetDir}/{$attachment->name}.{$attachment->extension}";

                // Copy the file from temp storage to auteur folder
                copy($sourcePath, $targetPath);

                // Save the public path to the model image field
                $model->image = "/storage/{$folder}/{$attachment->name}.{$attachment->extension}";
            }
        }

        // Optional: if you want to save nom and related ids
        $model->nom = $data['nom'];

        // Save model
        $model->save();

        Toast::info('Image uploaded successfully.');

        // Redirect back to your resource list page or wherever you want
        return redirect()->route('platform.resource.list', ['resource' => static::uriKey()]);
    }
    /**
     * Get the permission key for the resource.
     *
     * @return string|null
     */
    public static function permission(): ?string
    {
        return 'platform.auteurs.view';
    }

}
