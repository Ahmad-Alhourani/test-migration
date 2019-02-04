<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAhmadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('ahmads', function (Blueprint $table) {
            $table->dropColumn('name7');
            $table->dropColumn('name5');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ahmads', function ($table) {
            $table->string('name7');

            $table->string('name5');
        });
    }
}
