<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('eventId');
            $table->string('hostEmail');
            $table->string('time');
            $table->string('place');
            $table->integer('radius');
            $table->text('description');
            $table->double('price');
            $table->string('category');
            $table->float('longitude');
            $table->float('latitude');
            $table->boolean('public');
            $table->timestamps();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
