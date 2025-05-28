<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CommandeProduit;

class CommandeProduitFactory extends Factory
{
    protected $model = CommandeProduit::class;

    public function definition(): array
    {
        return [
            'qte' => $this->faker->numberBetween(1, 10),
            'prix_ht' => $this->faker->randomFloat(2, 5, 100),
            'tva' => $this->faker->randomFloat(2, 5, 20),
            'commande_id' => \App\Models\Commande::factory(),
            'produit_id' => \App\Models\Produit::factory(),
        ];
    }
}
