<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CategoryDesc extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'listing_categories';

    // public function listing(){
    //     return $this->belongsTo('App\Listings');
    // }

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
