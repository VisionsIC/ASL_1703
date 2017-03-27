<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTherapistTitleTable extends Migration
{
    public function up()
    {
        Schema::create('therapist_title', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title_type', 255);
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
        Schema::drop('therapist_title');
    }
}
