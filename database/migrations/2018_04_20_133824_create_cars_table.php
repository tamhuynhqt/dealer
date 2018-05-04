<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->char('vin',17);
            $table->string('model');
            $table->string('make');
            $table->unsignedSmallInteger('year');
            $table->string('series')->nullable();
            $table->string('color');
            $table->string('tranmission');
            $table->tinyInteger('fuel_type');
            $table->tinyInteger('status');
            $table->unsignedMediumInteger('odometer');
            $table->integer('image_id')->unsigned();
            $table->integer('body_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->foreign('body_id')->references('id')->on('bodies');
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
        Schema::dropIfExists('cars');
    }
}
