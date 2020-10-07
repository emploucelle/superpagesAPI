<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Listing_workinghours extends Authenticatable
{
    use Notifiable;

    // protected $table = 'listings';
    protected $table = 'listing_workinghours';

    protected $fillable = [
        'listing_id',
        'mon_st1',
        'mon_et1',
        'mon_st2',
        'mon_et2',
        'mon_status',
        'tue_st1',
        'tue_et1',
        'tue_st2',
        'tue_et2',
        'tue_status',
        'wed_st1',
        'wed_et1',
        'wed_st2',
        'wed_et2',
        'wed_status',
        'thu_st1',
        'thu_et1',
        'thu_st2',
        'thu_et2',
        'thu_status',
        'fri_st1',
        'fri_et1',
        'fri_st2',
        'fri_et2',
        'fri_status',
        'sat_st1',
        'sat_et1',
        'sat_st2',
        'sat_et2',
        'sat_status',
        'sun_st1',
        'sun_et1',
        'sun_st2',
        'sun_et2',
        'sun_status',
        'service_notes',
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
