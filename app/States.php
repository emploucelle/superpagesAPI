<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class States extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'states';

    protected $fillable = [
        'CountryId',
        'State',
        'slug',
        'Code',
        'ADM1Code',
        'status',
        'price',
        'is_featured',
        'seo_friendly_title',
        'seo_meta_description',
        'seo_meta_keyword',
        'contents',
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
