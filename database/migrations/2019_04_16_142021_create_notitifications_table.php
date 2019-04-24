<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotitificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notitifications', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('sender_id');
            $table->string('type');
            $table->string('title');
            $table->mediumText('body');
            $table->mediumText('href');
            $table->integer('recipient_id');
            $table->integer('is_unread');
            $table->integer('is_hidden');
            $table->date('created_time');
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
        Schema::dropIfExists('notitifications');
    }
}
