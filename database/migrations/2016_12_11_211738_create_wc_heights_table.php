<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcHeightsTable extends Migration
{
    public function up()
    {
        Schema::create('wc_heights', function (Blueprint $table) {

            $table->increments('id');
            $table->string('wc_height', 255);
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
        Schema::drop('wc_heights');
    }

}
