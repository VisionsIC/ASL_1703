<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcBackWidthTable extends Migration
{
    public function up()
    {
        Schema::create('wc_back_width', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wc_back_width', 255);
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
        Schema::drop('wc_back_width');
    }
}
