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
            $table->longText('sunana')->nullable();
            $table->longText('kehalwana')->nullable();
            $table->longText('dekhana')->nullable();
            $table->longText('mashq')->nullable();
            $table->longText('batana')->nullable();
            $table->longText('sikhana')->nullable();
            $table->longText('adat')->nullable();
            $table->longText('samjhana')->nullable();
            $table->longText('parhana')->nullable();
            $table->longText('status')->nullable();
            $table->timestamps();
            $table->index('id');
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
