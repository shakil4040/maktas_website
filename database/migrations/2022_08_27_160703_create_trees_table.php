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
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('trees')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->tinyInteger('levels');
            $table->longText('title');
            $table->integer('naseeha_com')->nullable();
            $table->integer('maktab_com')->nullable();
            $table->integer('government_com')->nullable();
            $table->tinyInteger('status')->default(true); // Add status column
            $table->string('added_by')->nullable();
            $table->json('structure')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent()->useCurrentOnUpdate();
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
