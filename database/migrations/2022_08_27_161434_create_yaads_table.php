<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYaadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yaads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('yad_dehani')->nullable();
            $table->string('kitni_takrar')->nullable();
            $table->string('revision')->nullable();
            $table->string('ahwal')->nullable();
            $table->longText('pasaymanzar')->nullable();
            $table->longText('result')->nullable();
            $table->string('shaz')->nullable();
            $table->longText('hawala')->nullable();
            $table->longText('government_ref')->nullable();
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
        Schema::dropIfExists('yaads');
    }
}
