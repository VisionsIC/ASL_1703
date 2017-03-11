<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {

        $table->increments('id');
        $table->string('companies', 255);
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
        Schema::drop('companies');
    }
}