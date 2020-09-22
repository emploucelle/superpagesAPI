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
            $table->string('splid')->nullable()->default('');
            $table->string('listing_type_id')->nullable()->default('');
            $table->string('manage_level_id')->nullable()->default('');
            $table->string('price_setting_id')->nullable()->default('');
            $table->string('user_id')->nullable()->default('');
            $table->string('is_featured')->nullable()->default('');
            $table->string('disable_claim')->nullable()->default('');
            $table->string('rating')->nullable()->default('');
            $table->string('listing_title')->nullable()->default('');
            $table->string('company_logo')->nullable()->default('');
            $table->string('company_slogan')->nullable()->default('');
            $table->string('listing_email')->nullable()->default('');
            $table->string('url_type')->nullable()->default('');
            $table->string('listing_url')->nullable()->default('');
            $table->string('listing_display_url')->nullable()->default('');
            $table->string('listing_phone')->nullable()->default('');
            $table->string('listing_fax')->nullable()->default('');
            $table->string('listing_address1')->nullable()->default('');
            $table->string('listing_address2')->nullable()->default('');
            $table->string('listing_zipcode')->nullable()->default('');
            $table->string('listing_summary')->nullable()->default('');
            $table->string('listing_description')->nullable()->default('');
            $table->string('listing_keyword')->nullable()->default('');
            $table->string('listing_location')->nullable()->default('');
            $table->string('hours_of_work')->nullable()->default('');
            $table->string('listingservice_id')->nullable()->default('');
            $table->string('countrie_id')->nullable()->default('');
            $table->string('countryname')->nullable()->default('');
            $table->string('state_id')->nullable()->default('');
            $table->string('statename')->nullable()->default('');
            $table->string('citie_id')->nullable()->default('');
            $table->string('cityname')->nullable()->default('');
            $table->string('lat_value')->nullable()->default('');
            $table->string('lng_value')->nullable()->default('');
            $table->string('vid_url_type')->nullable()->default('');
            $table->string('embedded_code')->nullable()->default('');
            $table->string('video')->nullable()->default('');
            $table->string('attached_file')->nullable()->default('');
            $table->string('promotional_code')->nullable()->default('');
            $table->string('renewal_date')->nullable()->default('');
            $table->string('status')->nullable()->default('');
            $table->string('extraloc')->nullable()->default('');
            $table->string('paid_status')->nullable()->default('');
            $table->string('add_transaction')->nullable()->default('');
            $table->string('backlink')->nullable()->default('');
            $table->string('seo_title')->nullable()->default('');
            $table->string('seo_friendly_url')->nullable()->default('');
            $table->string('seo_description')->nullable()->default('');
            $table->string('seo_keywords')->nullable()->default('');
            $table->string('facebook_url')->nullable()->default('');
            $table->string('twitter_url')->nullable()->default('');
            $table->string('googleplus_url')->nullable()->default('');
            $table->string('instagram_url')->nullable()->default('');
            $table->string('pinterest_url')->nullable()->default('');
            $table->string('linkedin_url')->nullable()->default('');
            $table->string('slug')->nullable()->default('');
            $table->string('latupdate')->nullable()->default('');
            $table->string('rankid')->nullable()->default('');
            $table->string('sortdate')->nullable()->default('');
            $table->string('abn')->nullable()->default('');
            $table->string('apiid')->nullable()->default('');
            $table->string('owner_name')->nullable()->default('');
            $table->string('owner_emailaddress')->nullable()->default('');
            $table->string('owner_phonenember')->nullable()->default('');
            $table->string('addresshide1')->nullable()->default('');
            $table->string('addresshide2')->nullable()->default('');
            $table->string('created')->nullable()->default('');
            $table->string('modified')->nullable()->default('');
            $table->string('slisting_schema')->nullable()->default('');
            $table->string('is_paid_addon')->nullable()->default('');
            $table->string('is_paid_logo')->nullable()->default('');
            $table->string('is_paid_video')->nullable()->default('');
            $table->string('logo_renewal_date')->nullable()->default('');
            $table->string('video_renewal_date')->nullable()->default('');
            $table->string('view_flag')->nullable()->default('');
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
