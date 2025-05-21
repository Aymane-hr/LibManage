<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
class Image extends Model
{
    use  AsSource, Filterable, Attachable;

    public function attachment()
{
    return $this->belongsToMany(\Orchid\Attachment\Models\Attachment::class);
}
}
