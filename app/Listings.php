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

   /* protected $fillable = [
        'name',
        'descr',
    ]; */

     protected $fillable = [
        'splid',
        'listing_type_id',
        'manage_level_id',
        'price_setting_id',
        'user_id',
        'is_featured',
        'disable_claim',
        'rating',
        'listing_title',
        'company_logo',
        'company_slogan',
        'listing_email',
        'url_type',
        'listing_url',
        'listing_display_url',
        'listing_phone',
        'listing_fax',
        'listing_address1',
        'listing_address2',
        'listing_zipcode',
        'listing_summary',
        'listing_description',
        'listing_keyword',
        'listing_location',
        'hours_of_work',
        'listingservice_id',
        'countrie_id',
        'countryname',
        'state_id',
        'statename',
        'citie_id',
        'cityname',
        'lat_value',
        'lng_value',
        'vid_url_type',
        'embedded_code',
        'video',
        'attached_file',
        'promotional_code',
        'renewal_date',
        'status',
        'extraloc',
        'paid_status',
        'add_transaction',
        'backlink',
        'seo_title',
        'seo_friendly_url',
        'seo_description',
        'seo_keywords',
        'facebook_url',
        'twitter_url',
        'googleplus_url',
        'instagram_url',
        'pinterest_url',
        'linkedin_url',
        'slug',
        'latupdate',
        'rankid',
        'sortdate',
        'abn',
        'apiid',
        'owner_name',
        'owner_emailaddress',
        'owner_phonenember',
        'addresshide1',
        'addresshide2',
        'created',
        'modified',
        'listing_schema',
        'is_paid_addon',
        'is_paid_logo',
        'is_paid_video',
        'logo_renewal_date',
        'video_renewal_date',
        'view_flag',
        'created_at',
        'updated_at',
        'categories',
        'users',
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
