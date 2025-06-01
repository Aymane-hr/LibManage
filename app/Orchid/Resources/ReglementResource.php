<?php

namespace App\Orchid\Resources;

use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Crud\Resource;
use Illuminate\Validation\Rule;
use Orchid\Screen\Fields\Input;
use Orchid\Crud\Filters\DefaultSorted;
use Illuminate\Database\Eloquent\Model;

class ReglementResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Reglement::class;

    public static function icon(): string
    {
        return 'bs.credit-card';
    }
    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('reglement')
                ->title('Reglement')
                ->placeholder('Reglement...'),
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
            TD::make('reglement'),

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
            Sight::make('reglement'),
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
    public function rules(Model $reglement): array
    {
        return [
            'reglement' => [
                'required',
                'string',
                'max:50',
                Rule::unique(self::$model, 'reglement')->ignore($reglement),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'reglement.required' => 'Le champ règlement est obligatoire.',
            'reglement.string' => 'Le règlement doit être une chaîne de caractères.',
            'reglement.max' => 'Le règlement ne peut pas dépasser 50 caractères.',
            'reglement.unique' => 'Ce règlement existe déjà.',
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
    public static function permission(): ?string
    {
        return 'platform.reglements.view';
    }
}
