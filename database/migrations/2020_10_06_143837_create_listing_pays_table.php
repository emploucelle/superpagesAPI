<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_pays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('listing_id')->nullable()->default('');
            $table->string('listing_payment_id')->nullable()->default('');
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
        Schema::dropIfExists('listing_pays');
    }
}
