<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanerTable extends Migration
{
    public function up()
    {
        Schema::create('loaner', function (Blueprint $table) {

            $table->increments('id');
            $table->string('equipment_loaned', 255);
            $table->string('loaner_id', 255);
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
        Schema::drop('loaner');
    }
}

