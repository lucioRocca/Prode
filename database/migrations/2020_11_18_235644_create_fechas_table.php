<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('fechas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('fecha');
            $table->unsignedBigInteger('fecha_cierre');
            $table->foreignId('torneo_id')->references('id')->on('torneos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fechas');
    }
}
