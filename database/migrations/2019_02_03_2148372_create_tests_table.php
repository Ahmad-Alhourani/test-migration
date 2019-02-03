<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->dropColumn('l_name');
            $table->dropColumn('des');

            $table->string('l_name2', 20)->nullable();

            $table->string('name', 50)->change();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests', function ($table) {
            $table->string('l_name');

            $table->string('des');
        });
    }
}
