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
            $table->unsignedBigInteger('tree_id')->nullable();
            $table->foreign('tree_id')->references('id')->on('trees')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->unsignedBigInteger('abrar_id')->nullable();
            $table->unsignedBigInteger('asif_id')->nullable();
            $table->unsignedBigInteger('age')->nullable();
            $table->unsignedBigInteger('age_sr')->nullable();
            $table->unsignedBigInteger('course_no')->nullable();
            $table->longText('detail')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent()->useCurrentOnUpdate();
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
