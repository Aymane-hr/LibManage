<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reglement;


class ReglementFactory extends Factory
{
    protected $model = Reglement::class;

    public function definition(): array
    {
        return [
            'reglement' => $this->faker->word,
        ];
    }
}
