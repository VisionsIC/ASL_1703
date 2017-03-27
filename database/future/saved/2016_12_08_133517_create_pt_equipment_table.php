<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtEquipmentTable extends Migration
{
    public function up()
    {
        Schema::create('pt_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pt_equipment_usage', 255);
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
        Schema::drop('pt_equipment');
    }
}
