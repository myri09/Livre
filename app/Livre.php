<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = ['titre','image_couverture','categorie_id'];
    public function ouvrage(){
        return $this->morphTo();
    }
    //
}
