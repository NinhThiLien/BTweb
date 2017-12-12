<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participate', function (Blueprint $table) {
            $table->increments('regid');
            $table->integer('userid')->unsigned();;
            // $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->integer('prgid')->unsigned();;
            // $table->foreign('prgid')->references('id')->on('programs')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participate', function (Blueprint $table) {
            Schema::drop('participate');
        });
    }
   

}
