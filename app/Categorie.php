<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable=['libelle'];
    public function livres(){
        return $this->morphMany(Livre::class, 'ouvrage');
    }
    //
}
