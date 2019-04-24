<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers_tbs', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->integer('vendor_id');
            $table->integer('category_id');
            $table->float('rate');
            $table->string('status');
            $table->integer('maximum_use');
            $table->string('start_time');
            $table->string('end_time');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('type');
            $table->longText('details');
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
        Schema::dropIfExists('offers_tbs');
    }
}
