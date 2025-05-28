<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Blog extends Model
{
    use AsSource, Filterable, Attachable, HasFactory;



    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function blogsTags()
    {
        return $this->hasMany(BlogTag::class);
    }
}
