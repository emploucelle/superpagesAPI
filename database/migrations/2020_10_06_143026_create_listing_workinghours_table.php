<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingWorkinghoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_workinghours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('listing_id ')->nullable()->default('');
            $table->string('mon_st1')->nullable()->default('');
            $table->string('mon_et1')->nullable()->default('');
            $table->string('mon_st2')->nullable()->default('');
            $table->string('mon_et2')->nullable()->default('');
            $table->string('mon_status')->nullable()->default('');
            $table->string('tue_st1')->nullable()->default('');
            $table->string('tue_et1')->nullable()->default('');
            $table->string('tue_st2')->nullable()->default('');
            $table->string('tue_et2')->nullable()->default('');
            $table->string('tue_status')->nullable()->default('');
            $table->string('wed_st1')->nullable()->default('');
            $table->string('wed_et1')->nullable()->default('');
            $table->string('wed_st2')->nullable()->default('');
            $table->string('wed_et2')->nullable()->default('');
            $table->string('wed_status')->nullable()->default('');
            $table->string('thu_st1')->nullable()->default('');
            $table->string('thu_et1')->nullable()->default('');
            $table->string('thu_st2')->nullable()->default('');
            $table->string('thu_et2')->nullable()->default('');
            $table->string('thu_status')->nullable()->default('');
            $table->string('fri_st1')->nullable()->default('');
            $table->string('fri_et1')->nullable()->default('');
            $table->string('fri_st2')->nullable()->default('');
            $table->string('fri_et2')->nullable()->default('');
            $table->string('fri_status')->nullable()->default('');
            $table->string('sat_st1')->nullable()->default('');
            $table->string('sat_et1')->nullable()->default('');
            $table->string('sat_st2')->nullable()->default('');
            $table->string('sat_et2')->nullable()->default('');
            $table->string('sat_status')->nullable()->default('');
            $table->string('sun_st1')->nullable()->default('');
            $table->string('sun_et1')->nullable()->default('');
            $table->string('sun_st2')->nullable()->default('');
            $table->string('sun_et2')->nullable()->default('');
            $table->string('sun_status')->nullable()->default('');
            $table->string('service_notes')->nullable()->default('');
            $table->string('created')->nullable()->default('');
            $table->string('modified')->nullable()->default('');
            $table->string('view_flag')->nullable()->default('0');
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
        Schema::dropIfExists('listing_workinghours');
    }
}
