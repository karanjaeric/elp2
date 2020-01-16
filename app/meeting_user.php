<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meeting_user extends Model
{
    protected $fillable =['user_id','meeting_id','status'];
}
