<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;

class ImageFactory extends Factory
{
    protected $model = Image::class;

   public function definition(): array
{
    return [
        // Using Picsum for realistic, random images
        'image' => 'https://picsum.photos/seed/' . uniqid() . '/320/240',

        // Or use Unsplash with keyword "product"
        // 'image' => 'https://source.unsplash.com/320x240/?product',

        'produit_id' => \App\Models\Produit::factory(),
        'blog_id' => \App\Models\Blog::factory(),
    ];
}

}
