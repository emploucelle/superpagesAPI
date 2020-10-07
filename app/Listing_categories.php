<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Listing_categories extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'listing_categories';

    protected $fillable = [
        'title',
        'is_featured',
        'is_subcategory',
        'image',
        'status',
        'keyword_search',
        'seo_page_title',
        'seo_friendly_title',
        'seo_meta_description',
        'seo_meta_keyword',
        'category_contents',
        'slug',
        'active_listing',
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
