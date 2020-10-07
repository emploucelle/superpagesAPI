<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable()->default('');
            $table->integer('is_featured')->nullable()->default('');
            $table->integer('is_subcategory')->nullable()->default('');
            $table->string('image')->nullable()->default('');
            $table->integer('status')->nullable()->default('');
            $table->text('keyword_search')->nullable()->default('');
            $table->string('seo_page_title')->nullable()->default('');
            $table->string('seo_friendly_title')->nullable()->default('');
            $table->text('seo_meta_description')->nullable()->default('');
            $table->text('seo_meta_keyword')->nullable()->default('');
            $table->string('category_contents')->nullable()->default('');
            $table->string('slug')->nullable()->default('');
            $table->integer('active_listing ')->nullable()->default('');
            $table->string('created')->nullable()->default('');
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
        Schema::dropIfExists('listing_categories');
    }
}
