<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Blog;
use App\Models\Image;
use App\Models\BlogTag;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_blog()
    {
        $blog = Blog::factory()->create([
            'titre' => 'Laravel Testing',
        ]);

        $this->assertDatabaseHas('blogs', ['titre' => 'Laravel Testing']);
    }

    /** @test */
    public function it_can_update_a_blog()
    {
        $blog = Blog::factory()->create(['titre' => 'Old Title']);

        $blog->update(['titre' => 'Updated Title']);

        $this->assertDatabaseHas('blogs', ['titre' => 'Updated Title']);
    }

    /** @test */
    public function it_can_delete_a_blog()
    {
        $blog = Blog::factory()->create();

        $blog->delete();

        $this->assertDatabaseMissing('blogs', ['id' => $blog->id]);
    }

    /** @test */
    public function it_has_many_images()
    {
        $blog = Blog::factory()->create();
        Image::factory()->count(3)->create(['blog_id' => $blog->id]);

        $this->assertCount(3, $blog->images);
    }

    /** @test */
    public function it_has_many_blog_tags()
    {
        $blog = Blog::factory()->create();
        BlogTag::factory()->count(2)->create(['blog_id' => $blog->id]);

        $this->assertCount(2, $blog->blogsTags);
    }
}
