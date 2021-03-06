<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Listing_pays extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'Listing_pays';

    protected $fillable = [
        'listing_id',
        'listing_payment_id',
        'view_flag',
    ];



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
