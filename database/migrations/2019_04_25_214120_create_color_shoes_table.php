<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_shoes', function (Blueprint $table) {
            $table->unsignedInteger('id_color');
            $table->foreign('id_color')->references('id')->on('colors');
            $table->unsignedInteger('id_shoe');
            $table->foreign('id_shoe')->references('id')->on('shoes');
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
        Schema::dropIfExists('color_shoes');
    }
}
