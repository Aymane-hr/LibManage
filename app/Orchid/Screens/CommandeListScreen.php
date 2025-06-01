<?php

namespace App\Orchid\Screens;

use Orchid\Screen\TD;
use App\Models\Commande;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;

class CommandeListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'commandes' => Commande::with(['Commanproduits'])
                ->orderBy('created_at', 'desc')
                ->paginate(10),
            ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Commandes';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('commandes', [
                TD::make('id'),
                TD::make('created_at', 'Date'),
                TD::make('regle', 'Réglée')->render(fn($cmd) => $cmd->regle ? '✅' : '❌'),
                TD::make('Actions')->render(fn($cmd) => Link::make('Voir Détail')
                    ->route('platform.commande.detail', $cmd->id))
            ])
        ];
    }

    /**
     * The permissions required to access this screen.
     */
    public function permission(): ?iterable
    {
        return [
            'platform.commande.view'
        ];
    }
}
