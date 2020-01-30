<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meeting_user extends Model
{
  /*Defines the blueprint for the meeting_user class*/
    protected $fillable =['user_id','meeting_id','status'];
}
