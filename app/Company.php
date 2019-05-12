<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use Notifiable;

    protected $guard = 'company';
    protected $fillable = ['name', 'email', 'password', 'profile',];
    protected $hidden = ['password', 'remember_token',];
}
