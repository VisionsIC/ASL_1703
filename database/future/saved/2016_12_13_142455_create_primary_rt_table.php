<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimaryRtTable extends Migration
{
    public function up()
    {
        Schema::create('primary_rt', function (Blueprint $table) {

            $table->increments('id');
            $table->string('primary_rt', 255);
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
        Schema::drop('primary_rt');
    }
}

