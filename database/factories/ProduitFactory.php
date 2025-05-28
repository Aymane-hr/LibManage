<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produit;

class ProduitFactory extends Factory
{
    protected $model = Produit::class;

    public function definition(): array
    {
        return [
            'designation' => $this->faker->word,
            'stock' => $this->faker->randomFloat(2, 0, 100),
            'tva' => $this->faker->randomFloat(2, 5, 20),
            'prix_ht' => $this->faker->randomFloat(2, 10, 200),
            'isbn' => $this->faker->isbn13,
            'isbook' => $this->faker->boolean,
            'categorie_id' => \App\Models\Categorie::factory(),
            'auteur_id' => \App\Models\Auteur::factory(),
        ];
    }
}
