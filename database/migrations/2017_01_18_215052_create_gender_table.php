<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenderTable extends Migration
{
    public function up()
    {
        Schema::create('gender', function (Blueprint $table) {

            $table->increments('id');
            $table->string('gender', 255);
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
        Schema::drop('gender');
    }
}
