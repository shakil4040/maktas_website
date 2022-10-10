<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEasiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('easies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('easy')->nullable();
            $table->string('mukhatab')->nullable();
            $table->string('rafe_ishkal')->nullable();
            $table->string('qaida')->nullable();
            $table->string('rahe_adal')->nullable();
            $table->string('husool')->nullable();
            $table->string('tamheed_khas')->nullable();
            $table->string('tamheed_am')->nullable();
            $table->string('hukam')->nullable();
            $table->string('hasiat')->nullable();
            $table->string('shoba')->nullable();
            $table->string('class')->nullable();
            $table->string('jins')->nullable();
            $table->string('zamana')->nullable();
            $table->string('taleem')->nullable();
            $table->string('amli_mashq')->nullable();
            $table->string('taluq')->nullable();
            $table->string('muharik')->nullable();
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
        Schema::dropIfExists('easies');
    }
}
