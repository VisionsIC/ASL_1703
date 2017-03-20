<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRtEquipmentTable extends Migration
{
    public function up()
    {
        Schema::create('rt_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rt_equipment_usage', 255);
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
        Schema::drop('rt_equipment');
    }
}
