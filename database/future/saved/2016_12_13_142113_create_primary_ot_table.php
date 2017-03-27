<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimaryOtTable extends Migration
{
    public function up()
    {
        Schema::create('primary_ot', function (Blueprint $table) {

            $table->increments('id');
            $table->string('primary_ot', 255);
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
        Schema::drop('primary_ot');
    }
}

