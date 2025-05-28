<?php
namespace App\Orchid\Screens;

use Orchid\Screen\TD;
use App\Models\Commande;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Switcher;
use Orchid\Support\Facades\Layout;

class CommandeDetailScreen extends Screen
{
    public $name = 'Détail de la Commande';
    public $description = 'Visualiser et modifier le statut de la commande';
    // public $permission = ['platform.commande.edit'];

    public $commande;

    /**
     * Query data.
     */
    public function query(Commande $commande): iterable
    {
        $produits = \App\Models\CommandeProduit::with('produit')
            ->where('commande_id', $commande->id)
            ->paginate(10); // change 10 to your preferred number per page

        return [
            'commande' => $commande,
            'produits' => $produits,
        ];
    }



    /**
     * Button commands.
     */
    public function commandBar(): array
    {
        return [
            Button::make('Mettre à jour')
                ->icon('bs.save')
                ->method('update'),
        ];
    }

    /**
     * Views layout.
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Switcher::make('commande.regle')
                    ->title('Commande Réglée')
                    ->sendTrueOrFalse(),
            ]),

            Layout::table('produits', [
                TD::make('produit.designation', 'Nom du produit'),
                TD::make('qte', 'Quantité'),
                TD::make('prix_ht', 'Prix HT'),
                TD::make('tva', 'TVA %'),
            ]),
        ];
    }


    /**
     * Handle update.
     */
    public function update(Request $request, Commande $commande)
    {
        $commande->regle = $request->input('commande.regle') ? 1 : 0;
        $commande->save();

        Alert::info('Commande mise à jour avec succès.');

        return redirect()->route('platform.commande.list');
    }
}

