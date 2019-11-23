<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    public function scholars(){
        return $this->hasMany('App\Scholar');
    }
}
