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
            // Menu::make('Get Started')
            //     ->icon('bs.book')
            //     ->title('Navigation')
            //     ->route(config('platform.index')),

            // Menu::make('Sample Screen')
            //     ->icon('bs.collection')
            //     ->route('platform.example')
            //     ->badge(fn () => 6),

            // Menu::make('Form Elements')
            //     ->icon('bs.card-list')
            //     ->route('platform.example.fields')
            //     ->active('*/examples/form/*'),

            // Menu::make('Layouts Overview')
            //     ->icon('bs.window-sidebar')
            //     ->route('platform.example.layouts'),

            // Menu::make('Grid System')
            //     ->icon('bs.columns-gap')
            //     ->route('platform.example.grid'),

            // Menu::make('Charts')
            //     ->icon('bs.bar-chart')
            //     ->route('platform.example.charts'),

            // Menu::make('Cards')
            //     ->icon('bs.card-text')
            //     ->route('platform.example.cards')
            //     ->divider(),

            Menu::make('Produits') // Resource manually added
            ->icon('bs.box-seam')
            ->route('platform.resource.list', ['resource' => ProduitResource::uriKey()]),

            Menu::make('Auteurs') // Resource manually added
            ->icon('bs.person-lines-fill')
            ->route('platform.resource.list', ['resource' => AuteurResource::uriKey()]),

            Menu::make('Blogs') // Resource manually added
            ->icon('bs.file-text')
            ->route('platform.resource.list', ['resource' => BlogResource::uriKey()]),

            Menu::make('Categories') // Resource manually added
            ->icon('bs.tags')
            ->route('platform.resource.list', ['resource' => CategorieResource::uriKey()]),

            Menu::make('Reglements') // Resource manually added
            ->icon('bs.credit-card-2-front')
            ->route('platform.resource.list', ['resource' => ReglementResource::uriKey()]),

            Menu::make('Tags') // Resource manually added
            ->icon('bs.tag')
            ->route('platform.resource.list', ['resource' => TagResource::uriKey()]),

             // Add your Images menu item here
            Menu::make('Images')
                ->icon('bs.image')
                ->route('platform.images'),
                // ->permission('platform.images')



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
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
