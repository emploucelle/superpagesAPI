<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'org_password',
        'firstname',
        'lastname',
    ];

    
    public function listings(){
        return $this->hasOne('App\Listings', 'user_id', 'id');
    }

    public function categories(){
        return $this->hasMany('App\Category', 'listing_id', 'id');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
