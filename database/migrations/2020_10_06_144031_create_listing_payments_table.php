<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable()->default('');
            $table->string('image')->nullable()->default('');
            $table->integer('status')->nullable()->default('');
            $table->string('slug')->nullable()->default('');
            $table->string('created')->nullable()->default('');
            $table->string('modified')->nullable()->default('');
            $table->integer('view_flag')->nullable()->default('0');
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
        Schema::dropIfExists('listing_payments');
    }
}
