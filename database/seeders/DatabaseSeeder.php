<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\{
    Reglement, Auteur, Categorie, Tag, Blog, Produit, Commande,
    CommandeProduit, Favori, Avi, Commentaire, Image, User
};

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Users and Reglements
        User::factory(10)->create();
        Reglement::factory(5)->create();

        // Auteurs and Categories
        $auteurs = Auteur::factory(5)->create();
        $categories = Categorie::factory(5)->create();

        // Tags
        $tags = Tag::factory(10)->create();

        // Blogs with tags and images
        Blog::factory(10)->create()->each(function ($blog) use ($tags) {
            $blog->tags()->attach($tags->random(rand(1, 3))->pluck('id'));
            Image::factory()->create(['blog_id' => $blog->id]);
        });

        // Produits with authors, categories, and images
        $produits = Produit::factory(20)->make()->each(function ($produit) use ($auteurs, $categories) {
            $produit->auteur_id = $auteurs->random()->id;
            $produit->categorie_id = $categories->random()->id;
            $produit->save();

            Image::factory(rand(1, 3))->create(['produit_id' => $produit->id]);
        });

        // Commentaires, Avis, Favoris
        $users = User::all();
        foreach ($produits as $produit) {
            foreach ($users->random(3) as $user) {
                Commentaire::factory()->create([
                    'user_id' => $user->id,
                    'produit_id' => $produit->id,
                ]);
                Avi::factory()->create([
                    'user_id' => $user->id,
                    'produit_id' => $produit->id,
                ]);
                Favori::factory()->create([
                    'user_id' => $user->id,
                    'produit_id' => $produit->id,
                ]);
            }
        }

        // Commandes and CommandeProduits
        Commande::factory(10)->create()->each(function ($commande) use ($produits) {
            foreach ($produits->random(rand(1, 4)) as $produit) {
                CommandeProduit::factory()->create([
                    'commande_id' => $commande->id,
                    'produit_id' => $produit->id,
                ]);
            }
        });
    }
}
