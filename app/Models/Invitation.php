<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Colocation;


class Invitation extends Model
{
    //
    protected $fillable=['colocation_id','sender_id','receiver_id','token','status'];

    public function colocation(){
        return $this->belongsTo(Colocation::class);
    }

    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }
    public function receiver(){
        return $this->belongsTo(User::class,'receiver_id');
    }
}
