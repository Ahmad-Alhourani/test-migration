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
            $table->dropForeign('branches_comp0_id_foreign');
            $table->dropColumn('comp0_id');
            $table->dropForeign('branches_comp2_id_foreign');
            $table->dropColumn('comp2_id');

            $table->unsignedInteger('comp1_id')->nullable();

            $table
                ->foreign('comp1_id')
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
