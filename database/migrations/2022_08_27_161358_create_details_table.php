<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->unsignedBigInteger('abrar_id')->nullable();
            $table->unsignedBigInteger('asif_id')->nullable();
            $table->unsignedBigInteger('age')->nullable();
            $table->unsignedBigInteger('age_sr')->nullable();
            $table->unsignedBigInteger('course_no')->nullable();
            $table->longText('detail')->nullable();            
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
        Schema::dropIfExists('details');
    }
}
