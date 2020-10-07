<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('listing_id')->nullable()->default('');
            $table->string('file_name')->nullable()->default('');
            $table->string('caption_name')->nullable()->default('');
            $table->string('main_display')->nullable()->default('');
            $table->string('path')->nullable()->default('');
            $table->string('sessionid')->nullable()->default('');
            $table->string('created')->nullable()->default('');
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
        Schema::dropIfExists('listing_images');
    }
}
