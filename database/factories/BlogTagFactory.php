<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BlogTag;

class BlogTagFactory extends Factory
{
    protected $model = BlogTag::class;

    public function definition(): array
    {
        return [
            'blog_id' => \App\Models\Blog::factory(),
            'tag_id' => \App\Models\Tag::factory(),
        ];
    }
}
