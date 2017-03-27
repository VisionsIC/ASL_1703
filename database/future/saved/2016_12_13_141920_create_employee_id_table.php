<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeIdTable extends Migration
{
    public function up()
    {
        Schema::create('employee_id', function (Blueprint $table) {

            $table->increments('id');
            $table->string('employee_id', 5);
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
        Schema::drop('employee_id');
    }
}

