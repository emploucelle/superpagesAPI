<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('CountryId ')->nullable()->default('');
            $table->string('State')->nullable()->default('');
            $table->string('slug')->nullable()->default('');
            $table->string('Code')->nullable()->default('');
            $table->string('ADM1Code')->nullable()->default('');
            $table->integer('status')->nullable()->default('');
            $table->string('price')->nullable()->default('');
            $table->integer('is_featured')->nullable()->default('');
            $table->string('seo_friendly_title')->nullable()->default('');
            $table->string('seo_meta_description')->nullable()->default('');
            $table->string('seo_meta_keyword')->nullable()->default('');
            $table->text('contents')->nullable()->default('');
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
        Schema::dropIfExists('states');
    }
}
