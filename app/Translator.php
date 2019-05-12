<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Translator extends Authenticatable
{
	use Notifiable;

    protected $guard = 'translator';
    protected $fillable = ['name', 'email', 'password',];
    protected $hidden = ['password', 'remember_token',];
}
