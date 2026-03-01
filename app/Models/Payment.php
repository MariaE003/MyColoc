<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Depense;
class Payment extends Model
{
    protected $fillable = [
        'payer_id','receiver_id','depense_id','montant','status'
    ];

    public function payer(){
        return $this->belongsTo(User::class, 'payer_id');
    }

    public function receiver(){
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function depense(){
        return $this->belongsTo(Depense::class);
    }
}