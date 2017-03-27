<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceTypeTable extends Migration
{
    public function up()
    {
        Schema::create('insurance_type', function (Blueprint $table) {

            $table->increments('id');
            $table->string('insurance_type', 255);
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
        Schema::drop('insurance_type');
    }
}