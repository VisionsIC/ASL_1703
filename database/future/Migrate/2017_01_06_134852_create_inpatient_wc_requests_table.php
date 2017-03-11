<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInpatientWcRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('inpatient_wc_requests', function (Blueprint $table) {

            $table->increments('id');
            $table->string('inpatient_wc_type', 255);
            $table->string('inpatient_wc_brand', 255);
            $table->string('inpatient_wc_model', 255);
            $table->string('inpatient_wc_dimensions', 255);
            $table->string('inpatient_wc_height', 255);
            $table->integer('inpatient_wheelchair_id', 100)->unsigned();
            $table->integer('inpatient_wc_type_id', 255)->unsigned();
            $table->integer('inpatient_wc_model_id', 255)->unsigned();
            $table->integer('inpatient_wc_brand_id', 100)->unsigned();
            $table->integer('inpatient_wc_dimensions_id', 100)->unsigned();
            $table->integer('inpatient_wc_height_id', 100)->unsigned();
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
        Schema::drop('inpatient_wc_requests');
    }
}
