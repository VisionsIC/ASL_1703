<?php

use Illuminate\Database\Seeder;

class OakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('oak')->insert(array(
            array('oak_room'=>'Choose Oak Room...'),
            array('oak_room'=>'301W'),
            array('oak_room'=>'302W'),
            array('oak_room'=>'303D'),
            array('oak_room'=>'303W'),
            array('oak_room'=>'304D'),
            array('oak_room'=>'304W'),
            array('oak_room'=>'305D'),
            array('oak_room'=>'305W'),
            array('oak_room'=>'306D'),
            array('oak_room'=>'306W'),
            array('oak_room'=>'307D'),
            array('oak_room'=>'307W'),
            array('oak_room'=>'308W'),
            array('oak_room'=>'308D'),
            array('oak_room'=>'309D'),
            array('oak_room'=>'309W'),
            array('oak_room'=>'310D'),
            array('oak_room'=>'311W'),
            array('oak_room'=>'312D'),
            array('oak_room'=>'312W'),
            array('oak_room'=>'313W'),
            array('oak_room'=>'314D'),
            array('oak_room'=>'314W'),
            array('oak_room'=>'315D'),
            array('oak_room'=>'315W'),
            array('oak_room'=>'316W'),
            array('oak_room'=>'317W'),
            array('oak_room'=>'318W'),
            array('oak_room'=>'319D'),
            array('oak_room'=>'319W'),
            array('oak_room'=>'320D'),
            array('oak_room'=>'320W'),
            array('oak_room'=>'321W'),
            array('oak_room'=>'322D'),
            array('oak_room'=>'322W'),
            array('oak_room'=>'323D'),
            array('oak_room'=>'323W'),
            array('oak_room'=>'324D'),
            array('oak_room'=>'324W'),
            array('oak_room'=>'325D'),
            array('oak_room'=>'325W'),
            array('oak_room'=>'326D'),
            array('oak_room'=>'326W')
        ));
    }
}
