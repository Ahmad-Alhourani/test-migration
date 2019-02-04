<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('firsts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('l_name', 20)->nullable();
            $table->string('email');
            $table->string('des')->nullable();
            $table->string('sms')->nullable();

            $table->timestamps();
            $table->string('slug');
            $table->softDeletes();
            $table->unique('slug');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firsts');
    }
}
