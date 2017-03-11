<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatingTable extends Migration
{
    public function up()
    {
        Schema::create('seating', function (Blueprint $table) {

            $table->increments('id');
            $table->string('seating_type', 255);
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
        Schema::drop('seating');
    }

}
