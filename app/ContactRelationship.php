<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRelationship extends Model
{
    //

    public function scholars(){

        return $this->hasMany('App\Scholar');
    }
}
