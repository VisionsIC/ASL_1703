<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoriesTable extends Migration
{
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accessory_category', 255);
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
        Schema::drop('accessories');
    }
}
