<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversityCategory extends Model
{
    //

    public function universities(){

       return $this->hasMany('App\University');
    }
}
