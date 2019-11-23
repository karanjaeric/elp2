<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //


    public function scholars(){

        return $this->hasMany('App\Scholar');

    }
    public function universitycategory(){

      return  $this->belongsTo('App\UniversityCategory','university_category_id');


    }    public function country(){

      return  $this->belongsTo('App\Country','country_id');


    }


}
