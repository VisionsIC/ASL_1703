<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('units')->insert(array(
            array('unit'=>'Choose Unit...'),
            array('unit'=>'Birch'),
            array('unit'=>'Maple'),
            array('unit'=>'Oak'),
            array('unit'=>'Spruce')
        ));
    }
}
