<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionsTable extends Migration
{
    public function up()
    {
        Schema::create('functions', function (Blueprint $table) {

            $table->increments('id');
            $table->string('function', 255);
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
        Schema::drop('functions');
    }
}
