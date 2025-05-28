<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Favori;

class FavoriFactory extends Factory
{
    protected $model = Favori::class;

    public function definition(): array
    {
        return [
            'date' => $this->faker->date,
            'user_id' => \App\Models\User::factory(),
            'produit_id' => \App\Models\Produit::factory(),
        ];
    }
}
