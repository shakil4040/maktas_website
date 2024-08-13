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
            $table->longText('title');
            $table->unsignedBigInteger('parent_id');
            $table->integer('naseeha_com')->nullable();
            $table->integer('maktab_com')->nullable();
            $table->integer('government_com')->nullable();
            $table->string('status')->after('government_com'); // Add status column
            $table->string('added_by')->nullable()->after('status');
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
