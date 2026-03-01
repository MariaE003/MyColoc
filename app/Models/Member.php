<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'user_id','colocation_id','role','joined_at','left_at',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function colocation(){
        return $this->belongsTo(Colocation::class);
    }
    public function paymentsSent() {
        return $this->hasMany(Payment::class, 'payer_id');
    }
    public function paymentsReceived() {
        return $this->hasMany(Payment::class, 'receiver_id');
    }
}
