<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTherapistRoleTable extends Migration
{
    public function up()
    {
        Schema::create('therapist_role', function (Blueprint $table) {

            $table->increments('id');
            $table->string('therapist_role_type', 255);
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
        Schema::drop('therapist_role');
    }
}

