<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminActivationTable extends Migration
{
    public function up()
    {
        Schema::create('admin_activation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('current_active_admins', 255);
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
        Schema::drop('admin_activation');
    }
}
