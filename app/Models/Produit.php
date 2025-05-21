<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
class Produit extends Model
{
    use AsSource, Filterable, Attachable;
    protected $guarded = ['id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    // public function commentaires()
    // {
    //     return $this->hasMany(Commentaire::class);
    // }

    public function auteur(){
        return $this->belongsTo(Auteur::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'produit_id');
    }

}
