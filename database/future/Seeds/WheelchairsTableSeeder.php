<?php

use Illuminate\Database\Seeder;

class WheelchairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('wc_types')->insert(array(
            array('wc_type'=>'Pick Wheelchair Type...','wc_type_id'=>'0',),
            array('wc_type'=>'Standard','wc_type_id'=>'1',),
            array('wc_type'=>'Lightweight','wc_type_id'=>'2',),
            array('wc_type'=>'Powered','wc_type_id'=>'3',),
            array('wc_type'=>'Lightweight Powered','wc_type_id'=>'4',),
            array('wc_type'=>'Tilt N Space','wc_type_id'=>'5',)
        ));
    }
}
