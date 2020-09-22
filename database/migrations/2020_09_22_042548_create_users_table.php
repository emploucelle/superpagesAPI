<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('splid')->nullable()->default('0');
            $table->string('user_type')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('org_password')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('address')->nullable();
            $table->string('citie_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('countrie_id')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('website')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->string('info_publish')->nullable();
            $table->string('image')->nullable();
            $table->string('register_type')->nullable();
            $table->string('fb_user_id')->nullable();
            $table->string('fb_access_token')->nullable();
            $table->string('agree_terms ')->nullable();
            $table->string('status ')->nullable();
            $table->string('rand_key')->nullable();
            $table->string('slug ')->nullable();
            $table->string('signup_ip')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->string('last_logged_in_time')->nullable();
            $table->string('last_visit')->nullable();
            $table->string('online_status')->nullable();
            $table->string('apiid')->nullable();
            $table->string('created')->nullable();
            $table->string('modified')->nullable();
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
        Schema::dropIfExists('users');
    }
}
