<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Commande;
use App\Models\CommandeProduit;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommandeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_commande()
    {
        $commande = Commande::factory()->create();

        $this->assertDatabaseHas('commandes', ['id' => $commande->id]);
    }

    /** @test */
    public function it_can_update_a_commande()
    {
        $commande = Commande::factory()->create();
        $commande->update(['updated_at' => now()->addHour()]);

        $this->assertTrue($commande->fresh()->updated_at->gt(now()));
    }

    /** @test */
    public function it_can_delete_a_commande()
    {
        $commande = Commande::factory()->create();
        $commande->delete();

        $this->assertDatabaseMissing('commandes', ['id' => $commande->id]);
    }

    /** @test */
    public function it_has_many_commande_produits()
    {
        $commande = Commande::factory()->create();
        CommandeProduit::factory()->count(3)->create([
            'commande_id' => $commande->id,
        ]);

        $this->assertCount(3, $commande->Commanproduits);
        $this->assertInstanceOf(CommandeProduit::class, $commande->Commanproduits->first());
    }
}
