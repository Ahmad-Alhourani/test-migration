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
            $table->dropColumn('update_at');
            $table->dropColumn('update_at');
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
            $table->dateTimeTz('update_at');

            $table->dateTimeTz('update_at');
        });
    }
}
