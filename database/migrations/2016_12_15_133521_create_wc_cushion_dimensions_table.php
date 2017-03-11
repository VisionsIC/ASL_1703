<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcCushionDimensionsTable extends Migration
{
    public function up()
    {
        Schema::create('cushion_dimensions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cushion_dimensions', 255);
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
        Schema::drop('cushion_dimensions');
    }
}
