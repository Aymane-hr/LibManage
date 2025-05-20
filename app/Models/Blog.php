<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use AsSource;

    /**
     * @var array
     */
    protected $fillable = [
        'contenu',
        'titre',
        'created_at',
        'updated_at'
    ];
}
