<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sr')->nullable();
            $table->string('title');
            $table->unsignedBigInteger('parent_id');
            $table->integer('naseeha_com');
            $table->integer('maktab_com');
            $table->integer('government_com');
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
        Schema::dropIfExists('trees');
    }
}
