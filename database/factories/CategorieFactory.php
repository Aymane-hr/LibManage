<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categorie;

class CategorieFactory extends Factory
{
    protected $model = Categorie::class;

    public function definition(): array
    {
        return [
            'categorie' => $this->faker->word,
            'image' => 'https://loremflickr.com/320/240/category',
        ];
    }
}
