<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcBacksTable extends Migration
{
    public function up()
    {
        Schema::create('wc_backs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('wc_back_type', 255);
            $table->string('wc_back_brand', 255);
            $table->string('wc_back_model', 255);
            $table->string('wc_back_width', 255);
            $table->string('wc_back_height', 255);
            $table->integer('wc_back_type_id', 255)->unsigned();
            $table->foreign('wc_back_type_id')->references('id')->on('wc_back_type');
            $table->integer('wc_back_model_id', 255)->unsigned();
            $table->foreign('wc_back_model_id')->references('id')->on('wc_back_model');
            $table->integer('wc_back_brand_id', 100)->unsigned();
            $table->foreign('wc_back_brand_id')->references('id')->on('wc_back_brand');
            $table->integer('wc_back_width_id', 100)->unsigned();
            $table->foreign('wc_back_width_id')->references('id')->on('wc_back_width');
            $table->integer('wc_back_height_id', 100)->unsigned();
            $table->foreign('wc_back_height_id')->references('id')->on('wc_back_height');
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
        Schema::drop('wc_backs');
    }
}
