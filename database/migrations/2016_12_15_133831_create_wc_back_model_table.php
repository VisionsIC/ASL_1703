<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcBackModelTable extends Migration
{
    public function up()
    {
        Schema::create('wc_back_model', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wc_back_model', 255);
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
        Schema::drop('wc_back_model');
    }
}
