<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Listing_payments extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'listing_payments';

    protected $fillable = [
        'title',
        'image',
        'status',
        'slug',
        'created',
        'modified',
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
