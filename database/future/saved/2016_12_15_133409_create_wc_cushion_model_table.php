<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcCushionModelTable extends Migration
{
    public function up()
    {
        Schema::create('cushion_model', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cushion_model', 255);
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
        Schema::drop('cushion_model');
    }
}
