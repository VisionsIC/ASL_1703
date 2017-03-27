<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaitTable extends Migration
{
    public function up()
    {
        Schema::create('gait', function (Blueprint $table) {

            $table->increments('id');
            $table->string('gait_item', 255);
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
        Schema::drop('gait');
    }
}
