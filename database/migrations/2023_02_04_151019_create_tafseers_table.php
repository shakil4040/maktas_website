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
        Schema::create('tafseers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('topic1')->nullable();
            $table->longText('topic2')->nullable();
            $table->longText('topic3')->nullable();
            $table->longText('topic4')->nullable();
            $table->longText('topic5')->nullable();
            $table->longText('topic6')->nullable();
            $table->longText('topic7')->nullable();
            $table->longText('topic8')->nullable();
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
        Schema::dropIfExists('tafseers');
    }
};
