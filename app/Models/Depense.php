<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Colocation;
use App\Models\Categorie;

class Depense extends Model
{
    protected $fillable=[
        'title','montant','date','payer_id','colocation_id','categorie_id','is_paid'
    ];
    public function colocation(){
        return $this->belongsTo(Colocation::class);
    } 
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    } 
    public function payer(){
        return $this->belongsTo(User::class,'payer_id');
    } 
    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
