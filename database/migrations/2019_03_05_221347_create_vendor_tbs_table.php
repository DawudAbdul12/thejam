<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_tbs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('p_email');
            $table->string('p_phone');
            $table->string('name_business');
            $table->string('slug');
            $table->string('registered_company_entitie');
            $table->string('business_email')->unique();
            $table->string('registered_address');
            $table->longText('details');
            $table->mediumText('password');
            $table->mediumText('image');
            $table->string('status');
            $table->integer('accept');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *php artisan migrate
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_tbs');
    }
}
