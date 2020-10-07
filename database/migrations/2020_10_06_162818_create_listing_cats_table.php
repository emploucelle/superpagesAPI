<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_cats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('listing_id')->nullable()->default('');
            $table->integer('listing_category_id')->nullable()->default('');
            $table->integer('view_flag')->nullable()->default('');
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
        Schema::dropIfExists('listing_cats');
    }
}
