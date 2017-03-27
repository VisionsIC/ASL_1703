<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsteticCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('prostetic_companies', function (Blueprint $table) {

            $table->increments('id');
            $table->string('prostetic_companies', 255);
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
        Schema::drop('prostetic_companies');
    }
}