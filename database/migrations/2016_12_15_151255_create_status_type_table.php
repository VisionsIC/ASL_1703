<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTypeTable extends Migration
{
    public function up()
    {
        Schema::create('status_type', function (Blueprint $table) {

            $table->increments('id');
            $table->string('status_type', 255);
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
        Schema::drop('status_type');
    }
}

