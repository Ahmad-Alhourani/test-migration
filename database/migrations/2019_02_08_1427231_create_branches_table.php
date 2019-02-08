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
            $table->dropForeign('branches_company_id_foreign');
            $table->dropColumn('company_id');

            $table->unsignedInteger('comp_id')->nullable();

            $table
                ->foreign('comp_id')
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
