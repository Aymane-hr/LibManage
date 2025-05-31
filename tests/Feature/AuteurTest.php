<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Auteur;
use App\Models\Produit;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuteurTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_auteur()
    {
        $auteur = Auteur::factory()->create([
            'nom' => 'Victor Hugo',
        ]);

        $this->assertDatabaseHas('auteurs', ['nom' => 'Victor Hugo']);
    }

    /** @test */
    public function it_can_update_an_auteur()
    {
        $auteur = Auteur::factory()->create(['nom' => 'Old Name']);

        $auteur->update(['nom' => 'New Name']);

        $this->assertDatabaseHas('auteurs', ['nom' => 'New Name']);
    }

    /** @test */
    public function it_can_delete_an_auteur()
    {
        $auteur = Auteur::factory()->create();

        $auteur->delete();

        $this->assertDatabaseMissing('auteurs', ['id' => $auteur->id]);
    }

    /** @test */
    public function it_has_many_produits()
    {
        $auteur = Auteur::factory()->create();
        Produit::factory()->count(3)->create(['auteur_id' => $auteur->id]);

        $this->assertCount(3, $auteur->produits);
    }
}
