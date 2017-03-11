<?php

use Illuminate\Database\Seeder;

class WcBrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('wc_brands')->insert(array(
            array('wc_brand'=>'Pick Wheelchair Brand...'),
            array('wc_brand'=>'Invacare'),
            array('wc_brand'=>'Breezy'),
            array('wc_brand'=>'Drive'),
            array('wc_brand'=>'Pride'),
            array('wc_brand'=>'Karman'),
            array('wc_brand'=>'Quantum'),
            array('wc_brand'=>'Jazzy'),
            array('wc_brand'=>'Quickie')
        ));
    }
}
