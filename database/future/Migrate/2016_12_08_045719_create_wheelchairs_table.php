<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWheelchairsTable extends Migration
{
    public function up()
    {
        Schema::create('wheelchairs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wc_type', 255);
            $table->string('wc_brand', 255);
            $table->string('wc_model', 255);
            $table->string('wc_dimensions', 255);
            $table->string('wc_height', 255);
            $table->string('wheelchair_id', 100);
            $table->foreign('wc_type_id')->references('id')->on('wc_types');
            $table->foreign('wc_model_id')->references('id')->on('wc_models');
            $table->foreign('wc_brand_id')->references('id')->on('wc_brands');
            $table->foreign('wc_dimensions_id')->references('id')->on('wc_dimensions');
            $table->foreign('wc_height_id')->references('id')->on('wc_heights');
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
        Schema::drop('wheelchairs');
    }
}