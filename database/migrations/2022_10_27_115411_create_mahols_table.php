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
        Schema::create('mahols', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('sunana')->nullable();
            $table->unsignedInteger('kehalwana')->nullable();
            $table->unsignedInteger('dekhana')->nullable();
            $table->unsignedInteger('mashq')->nullable();
            $table->unsignedInteger('batana')->nullable();
            $table->unsignedInteger('sikhana')->nullable();
            $table->unsignedInteger('adat')->nullable();
            $table->unsignedInteger('samjhana')->nullable();
            $table->unsignedInteger('parhana')->nullable();
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
        Schema::dropIfExists('mahols');
    }
};
