<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $fillable = ['start_at','end_at','notes','user_id','room_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function room(){
        return $this->belongsTo(Room::class,'room_id')->withTrashed();
    }
}
