<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable =['name','date','description','host'];

    public function attendees(){
        return $this ->hasManyThrough(
            User::class,
            meeting_user::class,
            'meeting_id',
            'id',
            'id',
            'user_id',
        );
    }
}
