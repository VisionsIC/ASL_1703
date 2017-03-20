<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTypeTable extends Migration
{
    public function up()
    {
        Schema::create('equipment_type', function (Blueprint $table) {

            $table->increments('id');
            $table->string('equipment_type', 255);
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
        Schema::drop('equipment_type');
    }
}
