<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeanGrade extends Model
{
    //

    public function scholars(){

        $this->hasMany('App\Scholar');
    }
}
