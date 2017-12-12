<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('url', 255)->unique();
            $table->string('title', 140);
            $table->string('description', 170);
            $table->text('content');
            $table->tinyInteger('level')->default(0);
            $table->integer('coachid')->unsigned();
            // $table->foreign('coachid')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps('');
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('programs');
    }
    

}
