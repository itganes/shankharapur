<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    public function rooms(){
        return $this->hasMany(Room::class,'floor_id');
    }
}
