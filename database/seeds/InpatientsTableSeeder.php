<?php

use Illuminate\Database\Seeder;

class InpatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('inpatients')->insert(array(
            array('first_name' => 'Antoine', 'last_name' => 'Jahshan', 'gender' => 'Male', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => 'CVA', 'unit' => 'Oak', 'room' => '301S'),
            array('first_name' => 'Dennis', 'last_name' => 'Gallagher', 'gender' => 'Male', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => 'CVA', 'unit' => 'Oak', 'room' => '302S'),
            array('first_name' => 'Robert', 'last_name' => 'Campbell', 'gender' => 'Male', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '303W'),
            array('first_name' => 'Morris', 'last_name' => 'Groce III', 'gender' => 'Male', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '304D'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '305D'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'inpatient', 'last_name' => '0', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
            array('first_name' => 'outpatient', 'last_name' => '1', 'gender' => 'inpatient', 'age' => '0', 'birth_date' => 'inpatient', 'diagnosis' => '0', 'unit' => 'Oak', 'room' => '113W'),
        ));
    }
}
