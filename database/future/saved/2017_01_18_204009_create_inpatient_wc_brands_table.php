<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInpatientWcBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('inpatient_wc_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inpatient_wc_brand', 255);
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
        Schema::drop('inpatient_wc_brands');
    }
}
