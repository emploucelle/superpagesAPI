<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'sample_category';

    protected $fillable = [
        'listing_id',
        'category_id',
    ];

    // public function listing(){
    //     return $this->hasOne('App\Listings', 'listing_id', 'id');
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
