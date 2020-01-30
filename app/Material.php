<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  /*Defines the blueprint for the Materials class*/
  protected $fillable = ['name','url','writeup','user_id'];
  /*Shows there is a relationship with the owner of the material*/
  public function owner()
    {
        return $this->belongsTo('App\User');
    }
}
