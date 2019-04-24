<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('type');
            $table->longText('details');
            $table->float('pricing');
            $table->string('location');
            $table->string('start_time');
            $table->string('end_time');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->integer('vendor_id');
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
        Schema::dropIfExists('listings');
    }
}
