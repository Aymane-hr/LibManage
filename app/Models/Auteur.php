<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $guarded = ['id'];

    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
   
 
}
