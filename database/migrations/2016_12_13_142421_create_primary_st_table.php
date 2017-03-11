<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimaryStTable extends Migration
{
    public function up()
    {
        Schema::create('primary_st', function (Blueprint $table) {

            $table->increments('id');
            $table->string('primary_st', 255);
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
        Schema::drop('primary_st');
    }
}

