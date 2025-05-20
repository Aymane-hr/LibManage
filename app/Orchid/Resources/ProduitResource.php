<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Crud\Resource;
use Illuminate\Validation\Rule;
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
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [];
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
