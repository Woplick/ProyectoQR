<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_category');
            $table->foreign('id_category')->references('id')->on('categories');
            $table->unsignedInteger('id_model');
            $table->foreign('id_model')->references('id')->on('model_shoes');
            $table->decimal('ref_price',8,2);
            $table->string('description')->nullable();
            $table->string('qr_code');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('shoes');
    }
}
