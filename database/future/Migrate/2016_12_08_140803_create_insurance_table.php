<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceTable extends Migration
{
    public function up()
    {
        Schema::create('insurance', function (Blueprint $table) {

            $table->increments('id');
            $table->string('insurance_company', 255);
            $table->string('insurance_type', 255);
            $table->string('policy_number', 255);
            $table->string('coverage_type', 255);
            $table->string('insurance_validity',255);
            $table->integer('coverage_type_id', 255)->unsigned();
            $table->integer('insurance_type_id', 255)->unsigned();
            $table->integer('insurance_holder_id', 255)->unsigned();
            $table->string('insurance_validity_id', 255)->unsigned();
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
        Schema::drop('insurance');
    }
}
