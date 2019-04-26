<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_shoes', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedinteger('id_brand');
            $table->foreign('id_brand')->references('id')->on('brands');
            $table->string('model',20);
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
        Schema::dropIfExists('model_shoes');
    }
}
