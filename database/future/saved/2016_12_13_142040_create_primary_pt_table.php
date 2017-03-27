<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimaryPtTable extends Migration
{
    public function up()
    {
        Schema::create('primary_pt', function (Blueprint $table) {

            $table->increments('id');
            $table->string('primary_pt', 255);
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
        Schema::drop('primary_pt');
    }
}

