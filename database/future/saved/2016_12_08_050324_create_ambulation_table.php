<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbulationTable extends Migration
{
    public function up()
    {
        Schema::create('ambulation', function (Blueprint $table) {

            $table->increments('id');
            $table->string('ambulatory_item', 255);
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
        Schema::drop('ambulation');
    }
}
