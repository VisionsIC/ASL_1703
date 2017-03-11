<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessTypeTable extends Migration
{
    public function up()
    {
        Schema::create('access_type', function (Blueprint $table) {

            $table->increments('id');
            $table->string('access_type', 255);
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
        Schema::drop('access_type');
    }
}
