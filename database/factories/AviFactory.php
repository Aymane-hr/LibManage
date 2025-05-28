<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Avi;
use App\Models\Avis;

class AviFactory extends Factory
{
    protected $model = Avis::class;

    public function definition(): array
    {
        return [
            'avi' => $this->faker->numberBetween(1, 5),
            'date' => $this->faker->date,
            'user_id' => \App\Models\User::factory(),
            'produit_id' => \App\Models\Produit::factory(),
        ];
    }
}

