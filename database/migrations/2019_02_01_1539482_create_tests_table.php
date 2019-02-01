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
            $table->dropColumn('name');
            $table->dropColumn('l_name');
            $table->dropColumn('des');
            $table->dropColumn('create_at');
            $table->dropColumn('create_at');

            $table->string('name|50');
            $table->string('l_name2', 20)->nullable();
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
            $table->string('name');

            $table->string('l_name');

            $table->string('des');

            $table->update_at('create_at');

            $table->update_at('create_at');
        });
    }
}
