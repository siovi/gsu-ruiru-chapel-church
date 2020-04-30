<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
	Schema::create('eventsses', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('user_id');
            $table->string('post_title');
            $table->text('post_body');
            $table->string('venue');
            $table->string('time');
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
        //
    }
}
