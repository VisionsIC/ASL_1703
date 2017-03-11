<?php

use Illuminate\Database\Seeder;

class WcDimensionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('wc_dimensions')->insert(array(
            array('wc_dimensions'=>'Pick Wheelchair Dimensions...'),
            array('wc_dimensions'=>'16x16'),
            array('wc_dimensions'=>'16x18'),
            array('wc_dimensions'=>'16x20'),
            array('wc_dimensions'=>'18x16'),
            array('wc_dimensions'=>'18x18'),
            array('wc_dimensions'=>'18x20'),
            array('wc_dimensions'=>'20x16'),
            array('wc_dimensions'=>'20x18'),
            array('wc_dimensions'=>'20x20'),
            array('wc_dimensions'=>'22x16'),
            array('wc_dimensions'=>'22x18'),
            array('wc_dimensions'=>'22x20')
        ));
    }
}
