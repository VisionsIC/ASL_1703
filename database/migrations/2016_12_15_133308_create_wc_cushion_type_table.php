<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcCushionTypeTable extends Migration
{
    public function up()
    {
        Schema::create('cushion_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cushion_type', 255);
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
        Schema::drop('cushion_type');
    }
}
