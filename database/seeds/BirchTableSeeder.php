<?php

use Illuminate\Database\Seeder;

class BirchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('birch')->insert(array(
            array('birch_room'=>'Choose Birch Room...'),
            array('birch_room'=>'141W'),
            array('birch_room'=>'142W'),
            array('birch_room'=>'143W'),
            array('birch_room'=>'144W'),
            array('birch_room'=>'145W'),
            array('birch_room'=>'146W'),
            array('birch_room'=>'148W'),
            array('birch_room'=>'149W'),
            array('birch_room'=>'150W'),
            array('birch_room'=>'151W'),
            array('birch_room'=>'152W')
        ));
    }
}
