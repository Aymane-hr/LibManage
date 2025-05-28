<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Auteur;

class AuteurFactory extends Factory
{
    protected $model = Auteur::class;

    public function definition(): array
    {
        return [
            'nom' => $this->faker->name,
            'image' => 'https://loremflickr.com/320/240/author',
        ];
    }
}
