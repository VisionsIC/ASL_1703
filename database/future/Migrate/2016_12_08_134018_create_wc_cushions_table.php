<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcCushionsTable extends Migration
{
    public function up()
    {
        Schema::create('wc_cushions', function (Blueprint $table) {

            $table->increments('id');
            $table->string('wc_cushion_type', 255);
            $table->string('wc_cushion_brand', 255);
            $table->string('wc_cushion_model', 255);
            $table->string('wc_cushion_dimensions', 255);
            $table->integer('wc_cushion_type_id', 255)->unsigned();
            $table->foreign('wc_cushion_type_id')->references('id')->on('wc_cushion_type');
            $table->integer('wc_cushion_model_id', 255)->unsigned();
            $table->foreign('wc_cushion_model_id')->references('id')->on('wc_cushion_model');
            $table->integer('wc_cushion_brand_id', 100)->unsigned();
            $table->foreign('wc_cushion_brand_id')->references('id')->on('wc_cushion_brand');
            $table->integer('wc_cushion_dimensions_id', 100)->unsigned();
            $table->foreign('wc_cushion_dimensions_id')->references('id')->on('wc_cushion_dimensions');
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
        Schema::drop('wc_cushions');
    }
}
