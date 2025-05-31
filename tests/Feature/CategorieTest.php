<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Categorie;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategorieTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_categorie()
    {
        $categorie = Categorie::factory()->create([
            'categorie' => 'Roman'
        ]);

        $this->assertDatabaseHas('categories', ['categorie' => 'Roman']);
    }

    /** @test */
    public function it_can_update_a_categorie()
    {
        $categorie = Categorie::factory()->create(['categorie' => 'Sci-Fi']);

        $categorie->update(['categorie' => 'Science Fiction']);

        $this->assertDatabaseHas('categories', ['categorie' => 'Science Fiction']);
    }

    /** @test */
    public function it_can_delete_a_categorie()
    {
        $categorie = Categorie::factory()->create();

        $categorie->delete();

        $this->assertDatabaseMissing('categories', ['id' => $categorie->id]);
    }
}
