<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('gender')->insert(array(
            array('gender'=>'Choose Gender...'),
            array('gender'=>'Male'),
            array('gender'=>'Female')
        ));
    }
}
