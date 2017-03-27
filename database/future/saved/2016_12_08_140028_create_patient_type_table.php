<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTypeTable extends Migration
{
    public function up()
    {
        Schema::create('patient_type', function (Blueprint $table) {

            $table->increments('id');
            $table->string('patient_type', 255);
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
        Schema::drop('patient_type');
    }
}
