<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicianRoleTable extends Migration
{
    public function up()
    {
        Schema::create('physician_role', function (Blueprint $table) {

            $table->increments('id');
            $table->string('physician_role_type', 255);
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
        Schema::drop('physician_role');
    }
}
