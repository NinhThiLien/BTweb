<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryIdImageToPrograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->string('image')->nullable()->after('content');
            $table->unsignedInteger('category_id')->nullable();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('category_id');
        });
    }
    
}
