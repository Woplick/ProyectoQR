<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizeShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size_shoes', function (Blueprint $table) {
            $table->unsignedInteger('id_size');
            $table->foreign('id_size')->references('id')->on('sizes');
            $table->unsignedInteger('id_shoes');
            $table->foreign('id_shoes')->references('id')->on('shoes');
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
        Schema::dropIfExists('size_shoes');
    }
}
