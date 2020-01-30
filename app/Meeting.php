<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
  /*Defines the blueprint for the Meeting class, the meeting attributes*/
    protected $fillable =['name','date','venue','description','host',];
  /*Defines the relationship with other attributes: A meeting has many attendees*/
    public function attendees(){
        return $this ->hasManyThrough(
            User::class,
            meeting_user::class,
            'meeting_id',
            'id',
            'id',
            'user_id'
        );
    }
}
