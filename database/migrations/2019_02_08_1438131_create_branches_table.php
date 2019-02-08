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
            $table->dropForeign('branches_comp_id_foreign');
            $table->dropColumn('comp_id');

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
