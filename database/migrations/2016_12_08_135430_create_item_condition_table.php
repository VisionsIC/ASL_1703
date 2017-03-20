<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemConditionTable extends Migration
{
    public function up()
    {
        Schema::create('item_condition', function (Blueprint $table) {

            $table->increments('id');
            $table->string('item_condition', 255);
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
        Schema::drop('item_condition');
    }
}
