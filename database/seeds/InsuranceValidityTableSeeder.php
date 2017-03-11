<?php

use Illuminate\Database\Seeder;

class InsuranceValidityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('insurance_validity')->insert(array(
            array('insurance_validity' => 'valid'),
            array('insurance_validity' => 'invalid')
        ));
    }
}