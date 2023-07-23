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
        Schema::create('masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sr')->nullable();
            $table->string('bunyadi');
            $table->string('zayli1');
            $table->string('zayli2');
            $table->string('zayli3');
            $table->string('zayli4');
            $table->string('zayli5');
            $table->string('zayli6');
            $table->string('zayli7');
            $table->string('zayli8');
            $table->string('zayli9');
            $table->string('zayli10');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masters');
    }
};
