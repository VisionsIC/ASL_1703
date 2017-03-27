<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsycRoleTable extends Migration
{
    public function up()
    {
        Schema::create('psyc_role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('psyc_role_type', 255);
            $table->nullableTimestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('psyc_role');
    }
}
