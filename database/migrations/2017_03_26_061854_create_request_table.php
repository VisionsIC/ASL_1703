<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateRequestTable extends Migration {
    public function up() {
        Schema::create('wheelchair_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unit');
            $table->string('room');
            $table->string('patient_name');
            $table->string('therapist_title_abbrev');
            $table->string('therapist_name');
            $table->string('wc_request');
            $table->string('description');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::drop('wheelchair_requests');
    }
}