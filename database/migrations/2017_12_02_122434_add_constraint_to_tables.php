<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('batchs', function (Blueprint $table) {
            $table->foreign('prgid')->references('id')->on('programs')->onDelete('cascade');
           
            $table->foreign('actid')->references('actid')->on('actions')->onDelete('cascade');
        });

        Schema::table('participate', function (Blueprint $table) {
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            
            $table->foreign('prgid')->references('id')->on('programs')->onDelete('cascade');
        });

        Schema::table('programs', function (Blueprint $table) {
            $table->foreign('coachid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
