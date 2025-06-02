<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categorie;

class CategorieFactory extends Factory
{
    protected $model = Categorie::class;



    public function definition(): array
    {
        $openLibraryIds = [
            'OL7353617M',  // The Great Gatsby
            'OL26436120M', // Atomic Habits
            'OL8199642M',  // 1984
            'OL24372608M', // To Kill a Mockingbird
            'OL24213342M', // The Alchemist
            'OL26412373M', // Rich Dad Poor Dad
            'OL25433996M', // The Power of Now
            'OL23320245M', // Think and Grow Rich
            'OL32308475M', // The Subtle Art of Not Giving a F*ck
            'OL27297804M', // Can't Hurt Me
            'OL27669465M', // Deep Work
            'OL29416611M', // The Four Agreements
            'OL26836529M', // Man's Search for Meaning
            'OL25441439M', // The 7 Habits of Highly Effective People
            'OL26354141M', // Becoming
            'OL7343617M',  // Pride and Prejudice
            'OL32104770M', // The Silent Patient
        ];
        $image = 'https://covers.openlibrary.org/b/olid/' . $openLibraryIds[array_rand($openLibraryIds)] . '-L.jpg';
        return [
            'categorie' => $this->faker->word,
            'image' => $image,
        ];
    }
}
