<?php

namespace App\Orchid\Resources;

use App\Models\Blog;
use Orchid\Screen\TD;
use App\Models\Produit;
use Orchid\Screen\Sight;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Attach;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Picture;
use Illuminate\Support\HtmlString;
use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\ResourceRequest;

class ImageResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Image::class;

    public $blog = true;
    public static function icon(): string
    {
        return 'bs.share';
    }
    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        // dd($test);
        return [
            // Choix du type d'image
//             Select::make('type')
//                 ->title('Type de contenu')
//                 ->options([
//                     'produit' => 'Produit',
//                     'blog' => 'Blog',
//                 ])
//                 ->empty('Choisissez un type')
//                 ->required(),
// //                  ->addBeforeRender(function ($field, $layout) {
// //     $field->set('onchange', 'this.form.submit()');
// // }),

            //                 // ->help('Sélectionnez si l’image est pour un produit ou un blog'),

            //             // Champ conditionnel pour le produit
//             Select::make('produit_id')
//                 ->title('Produit')
//                 ->fromModel(Produit::class, 'designation')
//                 ->canSee(!$blog),

            //             // Champ conditionnel pour le blog
//             Select::make('blog_id')
//                 ->title('Blog')
//                 ->fromModel(Blog::class, 'titre')
//                 ->canSee(request()->get('type') === 'blog' ),

            // Champ d'image
            Attach::make('image')
    ->title('Image')
    ->group('photo'),
    // ->required()
    // ->help('Téléversez une image carrée (ex: 300x300)'),

        ];


    }
public function onSave(ResourceRequest $request, Model $model)
{
   dd($request->all(),$model);
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
            TD::make('image')
                ->render(function ($model) {
                    if (!$model->image)
                        return '—';

                    return "<img src='" . asset($model->image) . "'
                     style='width: 100px; height: 100px; object-fit: cover; border-radius: 8px;' />";
                })
                ->width('120px')
                ->cantHide(),
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
            Sight::make('image')
            ->render(function ($model) {
                if (!$model->image) return '—';

                return new HtmlString(
                    "<img src='" . asset( $model->image) . "'
                          style='max-width: 200px; max-height: 200px; object-fit: cover; border-radius: 8px;' />"
                );
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
        return [];
    }

    public function rules(Model $image): array
    {
        return [
            'image' => ['required'],
            // 'type' => ['required', 'in:produit,blog'],
            // 'produit_id' => ['nullable', 'required_if:type,produit', 'exists:produits,id'],
            // 'blog_id' => ['nullable', 'required_if:type,blog', 'exists:blogs,id'],
        ];
    }

}
