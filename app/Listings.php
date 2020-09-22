<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Listings extends Authenticatable
{
    use Notifiable;

    protected $table = 'listings';
    //protected $table = 'testing_table';

    protected $fillable = [
        'name',
        'descr',
    ];

    public function categories(){
        return $this->hasMany('App\Category', 'listing_id', 'id');
    }

    public function users(){
        return $this->hasOne('App\Users', 'id', 'user_id');
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
