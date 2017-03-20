<?php

use Illuminate\Database\Seeder;

class PatientTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('patient_type')->insert(array(
            array('patient_type' => 'inpatient'),
            array('patient_type' => 'outpatient'),
        ));
    }
}
