<?php

use Illuminate\Database\Seeder;

class WcTypesTableSeeder extends Seeder
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
            array('wc_type'=>'Pick Wheelchair Type...'),
            array('wc_type'=>'Standard'),
            array('wc_type'=>'Lightweight'),
            array('wc_type'=>'Powered'),
            array('wc_type'=>'Lightweight Powered'),
            array('wc_type'=>'Tilt N Space')
        ));
    }
}
