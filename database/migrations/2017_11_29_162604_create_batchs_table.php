<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batchs', function (Blueprint $table) {
            $table->increments('batchid');
            $table->integer('prgid')->unsigned();;
            // $table->foreign('prgid')->references('id')->on('programs')->onDelete('cascade');
            $table->integer('actid')->unsigned();;
            // $table->foreign('actid')->references('actid')->on('actions')->onDelete('cascade');
            $table->date('date');
            $table->time('start');
            $table->time('end');
            // $table->integer('level');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('batchs', function (Blueprint $table) {
            //
        });
    }


}
