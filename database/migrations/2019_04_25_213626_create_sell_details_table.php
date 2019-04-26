<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_details', function (Blueprint $table) {
            $table->unsignedInteger('id_sell');
            $table->foreign('id_sell')->references('id')->on('sells');
            $table->unsignedInteger('id_shoes');
            $table->foreign('id_shoes')->references('id')->on('shoes');
            $table->integer('quantity');
            $table->decimal('sell_price',8,2);
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
        Schema::dropIfExists('sell_details');
    }
}
