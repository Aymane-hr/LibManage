<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commentaire;

class CommentaireFactory extends Factory
{
    protected $model = Commentaire::class;

    public function definition(): array
    {
        return [
            'commentaire' => $this->faker->sentence,
            'date' => $this->faker->date,
            'user_id' => \App\Models\User::factory(),
            'produit_id' => \App\Models\Produit::factory(),
        ];
    }
}
