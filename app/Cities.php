<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cities extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'cities';

    protected $fillable = [
        'CountryID',
        'StateID',
        'City',
        'Latitude',
        'Longitude',
        'TimeZone',
        'DmaId',
        'Code',
        'image',
        'slug',
        'postcode',
        'status',
        'default',
        'price',
        'is_featured',
        'seo_friendly_title',
        'seo_meta_description',
        'seo_meta_keyword',
        'contents',
        'searchfld',
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
