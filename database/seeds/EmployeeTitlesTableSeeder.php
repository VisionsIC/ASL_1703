<?php

use Illuminate\Database\Seeder;

class EmployeeTitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('employee_titles')->insert(array(
            array('employee_title'=>'Choose Employee Title...', 'title_abbreviation'=>''),
            array('employee_title'=>'Admissions Representative', 'title_abbreviation'=>'AR'),
            array('employee_title'=>'Dietary Technician', 'title_abbreviation'=>'DT'),
            array('employee_title'=>'Patient Care Technician', 'title_abbreviation'=>'PCT'),
            array('employee_title'=>'Registered Nurse', 'title_abbreviation'=>'RN'),
            array('employee_title'=>'Licensed Practitioner of Nursing', 'title_abbreviation'=>'LPN'),
            array('employee_title'=>'Psychologist', 'title_abbreviation'=>'PSY'),
            array('employee_title'=>'Physician', 'title_abbreviation'=>'PHD'),
            array('employee_title'=>'Unit Attendant', 'title_abbreviation'=>'UA'),
            array('employee_title'=>'Therapy Aide', 'title_abbreviation'=>'TA'),
            array('employee_title'=>'Physical Therapist', 'title_abbreviation'=>'PT'),
            array('employee_title'=>'Occupational Therapist', 'title_abbreviation'=>'OT'),
            array('employee_title'=>'Speech Therapist', 'title_abbreviation'=>'ST'),
            array('employee_title'=>'Recreational Therapist', 'title_abbreviation'=>'RT'),
            array('employee_title'=>'Physical Therapist Assistant', 'title_abbreviation'=>'PTA'),
            array('employee_title'=>'Occupational Therapist Assistant', 'title_abbreviation'=>'OTA'),
            array('employee_title'=>'Recreational Therapist Assistant', 'title_abbreviation'=>'RTA'),
            array('employee_title'=>'Speech Therapist Assistant', 'title_abbreviation'=>'STA'),
            array('employee_title'=>'Department Supervisor of Nursing', 'title_abbreviation'=>'DSN'),
            array('employee_title'=>'Administrative Supervisor of Nursing', 'title_abbreviation'=>'ASN'),
            array('employee_title'=>'Department Supervisor of Therapy', 'title_abbreviation'=>'DST'),
            array('employee_title'=>'Administrative Supervisor of Therapy', 'title_abbreviation'=>'AST'),
        ));
    }
}
