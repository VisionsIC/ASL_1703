<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpruceTable extends Migration
{
    public function up()
    {
        Schema::create('spruce', function (Blueprint $table) {

            $table->increments('id');
            $table->string('spruce_room', 255);
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
        Schema::drop('spruce');
    }
}
