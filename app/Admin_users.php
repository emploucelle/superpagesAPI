<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;

class Admin_users extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $table = 'admin_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username','email','password','email_verified_at','remember_token','api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getAuthPassword()
    {
      return $this->password;
    }

    // public function setPasswordAttribute($password){
    //     $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
    // }

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }
}