<?php

use Illuminate\Database\Seeder;

class WcUnitsTableSeeder extends Seeder
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
            array('patient_type' => 'inpatient', 'patient_type_id' => '0',),
            array('patient_type' => 'outpatient', 'patient_type_id' => '1',),
        ));
    }
}
