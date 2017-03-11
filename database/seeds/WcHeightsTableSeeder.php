<?php

use Illuminate\Database\Seeder;

class WcHeightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('wc_heights')->insert(array(
            array('wc_height'=>'Pick Wheelchair height...'),
            array('wc_height'=>'Standard'),
            array('wc_height'=>'Lifted'),
            array('wc_height'=>'Hemi'),
            array('wc_height'=>'Super Hemi')
        ));
    }
}
