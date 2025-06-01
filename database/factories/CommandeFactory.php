<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commande;

class CommandeFactory extends Factory
{
    protected $model = Commande::class;

    public function definition(): array
    {
        return [
            'date' => $this->faker->date,
            'remise' => $this->faker->randomFloat(2, 0, 100),
            'regle' => $this->faker->boolean,
            'reglement_id' => \App\Models\Reglement::factory(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
