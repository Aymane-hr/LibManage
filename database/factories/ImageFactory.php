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
            'image' => 'https://loremflickr.com/320/240/product',
            'produit_id' => \App\Models\Produit::factory(),
            'blog_id' => \App\Models\Blog::factory(),
        ];
    }
}
