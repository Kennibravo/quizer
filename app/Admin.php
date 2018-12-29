<?php

namespace quizer;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;

    //The auth guard for admin
    protected $guard = 'admin';

    protected $fillable = [
    	'email', 'password',
    ];

    protected $hidden = [
    	'password', 'remember_token',
    ];
}
