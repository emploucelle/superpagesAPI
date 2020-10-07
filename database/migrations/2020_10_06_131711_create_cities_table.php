<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CountryID')->nullable()->default('');
            $table->string('StateID')->nullable()->default('');
            $table->string('City')->nullable()->default('');
            $table->string('Latitude')->nullable()->default('');
            $table->string('Longitude')->nullable()->default('');
            $table->string('TimeZone')->nullable()->default('');
            $table->string('DmaId')->nullable()->default('');
            $table->string('Code')->nullable()->default('');
            $table->string('image')->nullable()->default('');
            $table->string('slug')->nullable()->default('');
            $table->string('postcode')->nullable()->default('');
            $table->integer('status')->nullable()->default('');
            $table->integer('default')->nullable()->default('');
            $table->string('price')->nullable()->default('');
            $table->integer('is_featured')->nullable()->default('');
            $table->string('seo_friendly_title')->nullable()->default('');
            $table->string('seo_meta_description')->nullable()->default('');
            $table->string('seo_meta_keyword')->nullable()->default('');
            $table->text('contents')->nullable()->default('');
            $table->integer('searchfld')->nullable()->default('');
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
        Schema::dropIfExists('cities');
    }
}
