<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('valor');
            $table->unsignedBigInteger('premio1');
            $table->unsignedBigInteger('premio2');
            $table->unsignedBigInteger('premio3');
            $table->unsignedBigInteger('premio4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valors');
    }
}
