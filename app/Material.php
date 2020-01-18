<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  protected $fillable = ['name','url','writeup','user_id'];

  public function post()
    {
        return $this->belongsTo('App\User');
    }
}
