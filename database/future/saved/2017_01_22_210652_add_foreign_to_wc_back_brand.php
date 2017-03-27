<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToWcBackBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wc_back_model', function (Blueprint $table) {
            $table->integer('wc_back_brand_id')->unsigned();
            $table->foreign('wc_back_brand_id')->references('id')->on('wc_back_brand');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wc_back_model', function (Blueprint $table) {
            //
            $table->dropForeign(['wc_back_brand_id']);
        });
    }
}