<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //


    public function scholars(){

        return $this->hasMany(Scholar::class);

    }

}
