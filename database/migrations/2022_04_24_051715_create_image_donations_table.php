<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_donations', function (Blueprint $table) {
            $table->increments('image_id');
            $table->string('image_program');
            $table->unsignedInteger('program_id');

            $table->foreign('program_id')->references('id')->on('programs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_donations');
    }
};
