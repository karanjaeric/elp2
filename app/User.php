<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *  Usetype:0 ->superuser, 1->Admin, 2-> Member, 3->Guest
     * @var array
     */
     /*Defines a new User's profile: Their characteristics*/
    protected $fillable = [
        'usertype','firstname','lastname','gender','email', 'phonenumber','phonenumber2','university','course','github','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /*Defines the relationship with another entity: A user has many meetings they can sign up for and attend*/
    public function meetings(){
        return $this ->hasManyThrough(
            Meeting::class,
            meeting_user::class,
            'user_id',
            'id',
            'id',
            'meeting_id'
        );
    }
}
