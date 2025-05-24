<?php

namespace App\Orchid\Resources;

use App\Models\Tag;
use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Crud\Resource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
use App\Orchid\Actions\EditAction;
use App\Orchid\Actions\CustomAction;
use Orchid\Crud\Actions\DeleteAction;
use Orchid\Crud\Filters\DefaultSorted;
use Illuminate\Database\Eloquent\Model;

class TagResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Tag::class;


    public static function icon(): string
    {
        return 'bs.tag'; // Bootstrap Icon: tag
    }


    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('tag')
                ->title('Tag')
                ->placeholder('Tag'),
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
            TD::make('id')->sort(),
            TD::make('tag')->sort(),

            TD::make('created_at', 'Date of creation')
                ->sort()
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->sort()
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
            TD::make('actions', 'Actions')
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Tag $tag) {
                    return Group::make([
                        Link::make('Edit')
                            ->route('platform.resource.edit', [
                                'resource' => TagResource::uriKey(),
                                'id' => $tag->id,
                            ])
                            ->icon('pencil')
                            ->class('btn btn-sm btn-outline-primary'),

                        Button::make('Delete')
                            ->icon('bs.trash')
                            ->confirm('Are you sure you want to delete this resource?')
                            ->method('delete', [
                                'id' => $tag->id,
                            ])
                            // ->canSee(auth()->user()->can('delete', $tag)) // Optional permission check
                            ->class('btn btn-sm btn-outline-danger'),
                    ]);
                })

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
            Sight::make('tag'),
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
    public function rules(Model $tag): array
    {
        return [
            'tag' => [
                'required',
                Rule::unique(self::$model, 'tag')->ignore($tag),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'tag.required' => 'Le champ tag est obligatoire.',
            'tag.unique' => 'Ce tag existe déjà.',
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
    /**
     * Determines whether the actions block should be shown in the table.
     *
     * @return bool
     */
    public function canShowTableActions(): bool
    {
        return false;
    }
}
