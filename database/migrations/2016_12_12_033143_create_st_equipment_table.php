<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStEquipmentTable extends Migration
{
    public function up()
    {
        Schema::create('st_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('st_equipment_usage', 255);
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
        Schema::drop('st_equipment');
    }
}
