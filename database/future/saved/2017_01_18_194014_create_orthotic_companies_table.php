<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrthoticCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('orthotic_companies', function (Blueprint $table) {

            $table->increments('id');
            $table->string('orthotic_companies', 255);
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
        Schema::drop('orthotic_companies');
    }
}