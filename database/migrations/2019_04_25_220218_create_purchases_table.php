<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('admins');
            $table->unsignedInteger('id_wholeseller');
            $table->foreign('id_wholeseller')->references('id')->on('wholesellers');
            $table->date('date');
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
        Schema::dropIfExists('purchases');
    }
}
