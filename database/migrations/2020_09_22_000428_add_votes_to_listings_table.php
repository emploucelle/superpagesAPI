<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('splid');
            $table->string('listing_type_id');
            $table->string('manage_level_id');
            $table->string('price_setting_id');
            $table->string('user_id');
            $table->string('is_featured');
            $table->string('disable_claim');
            $table->string('rating');
            $table->string('listing_title');
            $table->string('company_logo');
            $table->string('company_slogan');
            $table->string('listing_email');
            $table->string('url_type');
            $table->string('listing_url');
            $table->string('listing_display_url');
            $table->string('listing_phone');
            $table->string('listing_fax');
            $table->string('listing_address1');
            $table->string('listing_address2');
            $table->string('listing_zipcode');
            $table->string('listing_summary');
            $table->string('listing_description');
            $table->string('listing_keyword');
            $table->string('listing_location');
            $table->string('hours_of_work');
            $table->string('listingservice_id');
            $table->string('countrie_id');
            $table->string('countryname');
            $table->string('state_id');
            $table->string('statename');
            $table->string('citie_id');
            $table->string('cityname');
            $table->string('lat_value');
            $table->string('lng_value');
            $table->string('vid_url_type');
            $table->string('embedded_code');
            $table->string('video');
            $table->string('attached_file');
            $table->string('promotional_code');
            $table->string('renewal_date');
            $table->string('status');
            $table->string('extraloc');
            $table->string('paid_status');
            $table->string('add_transaction');
            $table->string('backlink');
            $table->string('seo_title');
            $table->string('seo_friendly_url');
            $table->string('seo_description');
            $table->string('seo_keywords');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('googleplus_url');
            $table->string('instagram_url');
            $table->string('pinterest_url');
            $table->string('linkedin_url');
            $table->string('slug');
            $table->string('latupdate');
            $table->string('rankid');
            $table->string('sortdate');
            $table->string('abn');
            $table->string('apiid');
            $table->string('owner_name');
            $table->string('owner_emailaddress');
            $table->string('owner_phonenember');
            $table->string('addresshide1');
            $table->string('addresshide2');
            $table->string('created');
            $table->string('modified');
            $table->string('slisting_schema');
            $table->string('is_paid_addon');
            $table->string('is_paid_logo');
            $table->string('is_paid_video');
            $table->string('logo_renewal_date');
            $table->string('video_renewal_date');
            $table->string('view_flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
