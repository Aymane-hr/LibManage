<?php

declare(strict_types=1);

namespace App\Orchid;

use App\Orchid\Resources\AuteurResource;
use App\Orchid\Resources\BlogResource;
use App\Orchid\Resources\CategorieResource;
use Orchid\Support\Color;
use Orchid\Platform\Dashboard;
use Orchid\Screen\Actions\Menu;
use Orchid\Platform\ItemPermission;
use App\Orchid\Resources\ProduitResource;
use App\Orchid\Resources\ReglementResource;
use App\Orchid\Resources\TagResource;
use Orchid\Platform\OrchidServiceProvider;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {
        return [
            Menu::make('Dashboard')
                ->icon('bs.speedometer')
                ->route('platform.example')
                ->permission('platform.dashboard'),

            Menu::make('Commmandes') // Resource manually added
                ->icon('bs.cart-check')
                ->route('platform.commande.list')
                ->permission('platform.commande.view'),

            Menu::make('Produits') // Resource manually added
                ->icon('bs.box-seam')
                ->route('platform.resource.list', ['resource' => ProduitResource::uriKey()])
                ->permission('platform.produits.view'),

            Menu::make('Auteurs') // Resource manually added
                ->icon('bs.person-lines-fill')
                ->route('platform.resource.list', ['resource' => AuteurResource::uriKey()])
                ->permission('platform.auteurs.view'),

            Menu::make('Blogs') // Resource manually added
                ->icon('bs.file-text')
                ->route('platform.resource.list', ['resource' => BlogResource::uriKey()])
                ->permission('platform.blogs.view'),

            Menu::make('Categories') // Resource manually added
                ->icon('bs.tags')
                ->route('platform.resource.list', ['resource' => CategorieResource::uriKey()])
                ->permission('platform.categories.view'),

            Menu::make('Reglements') // Resource manually added
                ->icon('bs.credit-card-2-front')
                ->route('platform.resource.list', ['resource' => ReglementResource::uriKey()])
                ->permission('platform.reglements.view'),

            Menu::make('Tags') // Resource manually added
                ->icon('bs.tag')
                ->route('platform.resource.list', ['resource' => TagResource::uriKey()])
                ->permission('platform.tags.view'),

            // Add your Images menu item here
            Menu::make('Images')
                ->icon('bs.images')
                ->route('platform.images')
            ->permission('platform.images.view'),



            Menu::make(__('Users'))
                ->icon('bs.people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access Controls')),

            Menu::make(__('Roles'))
                ->icon('bs.shield')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->divider(),


        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users'))
                ->addPermission('platform.dashboard', __('Dashboard'))
                ->addPermission('platform.auteurs.view', 'auteurs')
                ->addPermission('platform.blogs.view', 'blogs')
                ->addPermission('platform.tags.view', 'tags')
                ->addPermission('platform.categories.view', 'catégories')
                ->addPermission('platform.commandes.view', 'commandes')
                ->addPermission('platform.produits.view', 'produits')
                ->addPermission('platform.images.view', 'images')
                ->addPermission('platform.reglements.view', 'reglements')
                ->addPermission('platform.commande.view', 'commandes')
                ->addPermission('platform.commande-produit.view', 'commande produit')
        ];
    }
}
