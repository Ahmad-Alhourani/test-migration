<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->dropForeign('branches_comp1_id_foreign');
            $table->dropColumn('comp1_id');

            $table->unsignedInteger('comp0_id')->nullable();
            $table->unsignedInteger('comp2_id')->nullable();

            $table
                ->foreign('comp0_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');
            $table
                ->foreign('comp2_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
