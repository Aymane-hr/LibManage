<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Reglement;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReglementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_reglement()
    {
        $reglement = Reglement::factory()->create();

        $this->assertDatabaseHas('reglements', ['id' => $reglement->id]);
    }

    /** @test */
    public function it_can_update_a_reglement()
    {
        $reglement = Reglement::factory()->create();
        $reglement->update(['updated_at' => now()->addDay()]);

        $this->assertTrue($reglement->fresh()->updated_at->gt(now()));
    }

    /** @test */
    public function it_can_delete_a_reglement()
    {
        $reglement = Reglement::factory()->create();
        $reglement->delete();

        $this->assertDatabaseMissing('reglements', ['id' => $reglement->id]);
    }
}
