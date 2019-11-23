<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectionCriteria extends Model
{
    //

    public function scholars(){

        return $this->hasMany('App\Scholars');
    }
}
