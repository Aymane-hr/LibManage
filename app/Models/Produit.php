<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
class Produit extends Model
{
    use AsSource, Filterable, Attachable, HasFactory;
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

    public function favoris()
    {
        return $this->hasMany(Favori::class);
    }

    public function ifHaveFavori(){
        return $this->favoris()->where('user_id', auth()->id())->exists();
    }



}
