<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInpatientTable extends Migration

{
    public function up()
    {
        Schema::create('inpatient', function (Blueprint $table) {

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
            $table->index('patient_type_id');
            $table->foreign('patient_type_id')->references('id')->on('patient_type');
            $table->string('account_id', 100);
            $table->string('cid_id', 255);
            $table->index('gender_id');
            $table->foreign('gender_id')->references('id')->on('gender');
            $table->index('diagnosis_id');
            $table->foreign('diagnosis_id')->references('id')->on('diagnosis');
            $table->index('current_nurse_id');
            $table->foreign('current_nurse_id')->references('id')->on('nurses');
            $table->index('current_tech_id');
            $table->foreign('current_tech_id')->references('id')->on('techs');
            $table->index('rehab_phys_id');
            $table->foreign('rehab_phys_id')->references('id')->on('physician_role');
            $table->index('attend_md_id');
            $table->foreign('attend_md_id')->references('id')->on('physician_role');
            $table->index('primary_ot_id');
            $table->foreign('primary_ot_id')->references('id')->on('primary_ot');
            $table->index('primary_pt_id');
            $table->foreign('primary_pt_id')->references('id')->on('primary_pt');
            $table->index('primary_rt_id');
            $table->foreign('primary_rt_id')->references('id')->on('primary_rt');
            $table->index('primary_st_id');
            $table->foreign('primary_st_id')->references('id')->on('primary_st');
            $table->index('primary_psyc_id');
            $table->foreign('primary_psyc_id')->references('id')->on('psyc_role');
            $table->index('unit_id');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->index('insurance_holder_id');
            $table->foreign('insurance_holder_id')->references('id')->on('insurance_type');
            $table->index('insurance_validity_id');
            $table->foreign('insurance_validity_id')->references('id')->on('insurance_validity');
            $table->index('phone_type_id');
            $table->foreign('phone_type_id')->references('id')->on('phone_type');
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
        Schema::drop('inpatient');
    }

}