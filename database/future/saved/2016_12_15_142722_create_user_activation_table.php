<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActivationTable extends Migration
{
    public function up()
    {
        Schema::create('user_activation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('current_active_users', 255);
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
        Schema::drop('user_activation');
    }
}
