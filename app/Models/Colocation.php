<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Member;
use App\Models\Depense;
use App\Models\Invitation;

class Colocation extends Model
{
    protected $fillable=[
        'name','owner_id','status'
    ];


    public function owner(){
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function members(){
        return $this->hasMany(Member::class);
    }

    public function invitations(){
        return $this->hasMany(Invitation::class);
    }

    public function depenses(){
        return $this->hasMany(Depense::class);
    }
    


}

