<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use App\Models\Auteur;
use Orchid\Screen\Sight;
use App\Models\Categorie;
use Orchid\Crud\Resource;
use Illuminate\Validation\Rule;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Illuminate\Database\Eloquent\Model;

class ProduitResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Produit::class;

    public static function icon(): string
    {
        return 'bs.dropbox';
    }
 /**
 * Get relationships that should be eager loaded when performing an index query.
 *
 * @return array
 */
public  function with(): array
{
    return ['auteur', 'categorie'];
}



    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('isbn')
                ->title('ISBN')
                ->placeholder('ISBN...'),

            Input::make('designation')
                ->title('Designation')
                ->placeholder('Designation...'),

            Select::make('auteur_id')
                ->fromModel(Auteur::class, 'nom') // assuming 'nom' is the author's name column
                ->title('Auteur')
                ->required()
                ->help('Choisissez l’auteur de ce produit'),

            Select::make('categorie_id')
                ->fromModel(Categorie::class, 'categorie') // assuming 'libelle' is the category name
                ->title('Catégorie')
                ->required()
                ->help('Choisissez la catégorie du produit'),

            Input::make('stock')
                ->title('Stock')
                ->placeholder('Stock...'),

            Input::make('prix_ht')
                ->title('Prix HT')
                ->placeholder('Prix HT...'),

            Input::make('tva')
                ->title('TVA')
                ->placeholder('TVA...'),

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
            TD::make('designation'),
            TD::make('auteur.nom', 'Auteur'),
            TD::make('categorie.categorie', 'Catégorie'),
            TD::make('stock'),
            TD::make('prix_ht'),
            TD::make('tva'),
            TD::make('isbn'),

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
            Sight::make('designation'),
            Sight::make('auteur.nom', 'Auteur'),
            Sight::make('categorie.categorie', 'Catégorie'),
            Sight::make('stock'),
            Sight::make('prix_ht'),
            Sight::make('tva'),
            Sight::make('isbn'),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }

    /**
     * Get the validation rules that apply to save/update.
     *
     * @return array
     */
    public function rules(Model $produit): array
    {
        return [
            'designation' => [
                'required',
                'string',
                'max:50',
                Rule::unique(self::$model, 'designation')->ignore($produit),
            ],
            'stock' => [
                'required',
                'numeric',
            ],
            'prix_ht' => [
                'required',
                'numeric',
            ],
            'tva' => [
                'required',
                'numeric',
            ],
            'isbn' => [
                'required',
                'string',
                'max:50',
                Rule::unique(self::$model, 'isbn')->ignore($produit),
            ],
        ];
    }

    public function messages(): array
{
    return [
        'designation.required' => 'Le champ Désignation est obligatoire.',
        'designation.string' => 'Le champ Désignation doit être une chaîne de caractères.',
        'designation.max' => 'Le champ Désignation ne peut pas dépasser 50 caractères.',
        'designation.unique' => 'Cette désignation est déjà utilisée.',

        'stock.required' => 'Le champ Stock est obligatoire.',
        'stock.numeric' => 'Le champ Stock doit être un nombre.',

        'prix_ht.required' => 'Le champ Prix HT est obligatoire.',
        'prix_ht.numeric' => 'Le champ Prix HT doit être un nombre.',

        'tva.required' => 'Le champ TVA est obligatoire.',
        'tva.numeric' => 'Le champ TVA doit être un nombre.',

        'isbn.required' => 'Le champ ISBN est obligatoire.',
        'isbn.string' => 'Le champ ISBN doit être une chaîne de caractères.',
        'isbn.max' => 'Le champ ISBN ne peut pas dépasser 50 caractères.',
        'isbn.unique' => 'Cet ISBN est déjà utilisé.',
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

    // Override creation text
    public static function createButtonLabel(): string
    {
        return __('Créer Produit');
    }
    public static function updateButtonLabel(): string
    {
        return __('Modifier Produit');
    }
    public static function deleteButtonLabel(): string
    {
        return __('Supprimer Produit');
    }
}
