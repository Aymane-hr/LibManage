<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Crud\Resource;
use Illuminate\Validation\Rule;
use Orchid\Screen\Fields\Input;
use Orchid\Crud\Filters\DefaultSorted;
use Illuminate\Database\Eloquent\Model;

class BlogResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Blog::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('titre')
                ->title('Titre')
                ->placeholder('Titre...'),
            Input::make('contenu')
                ->title('Contenu')
                ->placeholder('Contenu...'),
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
            TD::make('titre'),
            TD::make('contenu'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at
                        ? $model->created_at->toDateTimeString()
                        : '-';
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at
                        ? $model->updated_at->toDateTimeString()
                        : '-';
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
            Sight::make('titre'),
            Sight::make('contenu'),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [
            new DefaultSorted('id', 'desc'),
        ];
    }

    /**
     * Get the validation rules that apply to save/update.
     *
     * @return array
     */
    public function rules(Model $blog): array
    {
        return [
            'titre' => [
                'required',
                'string',
                'max:100',
                Rule::unique(self::$model, 'titre')->ignore($blog),
            ],
            'contenu' => [
                'required',
                'string',
                'max:255',
                Rule::unique(self::$model, 'contenu')->ignore($blog),
            ],
        ];
    }

    public function messages(): array
    {
        return [

            'titre.required' => 'Le titre est obligatoire.',
            'titre.string' => 'Le titre doit être une chaîne de caractères.',
            'titre.max' => 'Le titre ne peut pas dépasser 100 caractères.',
            'titre.unique' => 'Ce titre existe déjà.',

            'contenu.required' => 'Le contenu est obligatoire.',
            'contenu.string' => 'Le contenu doit être une chaîne de caractères.',
            'contenu.max' => 'Le contenu ne peut pas dépasser 255 caractères.',
            'contenu.unique' => 'Ce contenu existe déjà.',
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
}
