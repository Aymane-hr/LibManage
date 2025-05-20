<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
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
    
}
