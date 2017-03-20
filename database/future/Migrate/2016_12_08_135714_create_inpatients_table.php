<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('inpatients', function (Blueprint $table) {

            $table->increments('id');
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('gender', 255);
            $table->string('age', 255);
            $table->string('birth_date', 255);
            $table->string('height', 255);
            $table->string('weight', 255);
            $table->string('diagnosis', 255);
            $table->string('unit', 255);
            $table->string('room', 255);
            $table->string('attending_md', 255);
            $table->string('rehab_physician', 255);
            $table->string('primary_ot', 255);
            $table->string('primary_pt', 255);
            $table->string('primary_rt', 255);
            $table->string('primary_st', 255);
            $table->string('primary_psyc', 255);
            $table->string('current_nurse', 255);
            $table->string('current_tech', 255);
            $table->string('insurance', 255);
            $table->string('address', 255);
            $table->string('primary_phone', 255);
            $table->string('secondary_phone', 255);
            $table->string('email', 255);
            $table->integer('patient_type_id', 100)->unsigned();
            $table->integer('account_id', 100)->unsigned();
            $table->integer('cid_id', 255)->unsigned();
            $table->integer('gender_id', 255)->unsigned();
            $table->integer('diagnosis_id', 100)->unsigned();
            $table->integer('current_nurse_id', 100)->unsigned();
            $table->integer('current_tech_id', 100)->unsigned();
            $table->integer('rehab_phys_id', 100)->unsigned();
            $table->integer('attend_md_id', 100)->unsigned();
            $table->integer('primary_ot_id', 100)->unsigned();
            $table->integer('primary_pt_id', 100)->unsigned();
            $table->integer('primary_rt_id', 100)->unsigned();
            $table->integer('primary_st_id', 100)->unsigned();
            $table->integer('primary_psyc_id', 100)->unsigned();
            $table->integer('current_nurse_id', 100)->unsigned();
            $table->integer('current_tech_id', 100)->unsigned();
            $table->integer('unit_id', 100)->unsigned();
            $table->integer('insurance_holder_id', 100)->unsigned();
            $table->integer('insurance_validity_id', 100)->unsigned();
            $table->integer('phone_type_id', 100)->unsigned();
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
        Schema::drop('inpatients');
    }

}