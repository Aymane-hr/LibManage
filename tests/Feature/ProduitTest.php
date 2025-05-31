<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Auteur;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProduitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_produit()
    {
        $categorie = Categorie::factory()->create();
        $auteur = Auteur::factory()->create();

        $produit = Produit::create([
            'designation' => 'Livre Laravel',
            'stock' => 150,
            'tva' => 20,
            'prix_ht' => 12,
            'isbn' => "451FGHJJSJSQQ",
            'isbook' => 1,
            'categorie_id' => $categorie->id,
            'auteur_id' => $auteur->id,
        ]);

        $this->assertDatabaseHas('produits', ['designation' => 'Livre Laravel']);
    }


    /** @test */
    public function it_can_update_a_produit()
    {
        $categorie = Categorie::factory()->create();
        $auteur = Auteur::factory()->create();

        $produit = Produit::factory()->create([
            'categorie_id' => $categorie->id,
            'auteur_id' => $auteur->id,
        ]);

        $produit->update(['designation' => 'Laravel Advanced']);

        $this->assertDatabaseHas('produits', ['designation' => 'Laravel Advanced']);
    }

    /** @test */
    public function it_can_delete_a_produit()
    {
        $produit = Produit::factory()->create();

        $produit->delete();

        $this->assertDatabaseMissing('produits', ['id' => $produit->id]);
    }


}
