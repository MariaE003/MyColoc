<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Depense;

class Categorie extends Model
{
    //
    protected $fillable=[
        'name',
    ];

    public function depense(){
        return $this->hasMany(Depense::class);
    }
}
