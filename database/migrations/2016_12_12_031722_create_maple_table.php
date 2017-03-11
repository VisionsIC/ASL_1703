<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapleTable extends Migration
{
    public function up()
    {
        Schema::create('maple', function (Blueprint $table) {

            $table->increments('id');
            $table->string('maple_room', 255);
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
        Schema::drop('maple');
    }
}
