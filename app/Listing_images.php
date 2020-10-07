<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Listing_images extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'listing_images';

    protected $fillable = [
        'listing_id',
        'file_name',
        'caption_name',
        'main_display',
        'path',
        'sessionid',
        'created',
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
