<?php

use Illuminate\Database\Seeder;

class MapleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('maple')->insert(array(
            array('maple_room'=>'Choose Maple Room...'),
            array('maple_room'=>'201D'),
            array('maple_room'=>'201W'),
            array('maple_room'=>'202D'),
            array('maple_room'=>'202W'),
            array('maple_room'=>'203D'),
            array('maple_room'=>'203W'),
            array('maple_room'=>'204D'),
            array('maple_room'=>'204W'),
            array('maple_room'=>'205D'),
            array('maple_room'=>'205W'),
            array('maple_room'=>'206D'),
            array('maple_room'=>'207D'),
            array('maple_room'=>'207W'),
            array('maple_room'=>'208D'),
            array('maple_room'=>'208W'),
            array('maple_room'=>'209D'),
            array('maple_room'=>'209W'),
            array('maple_room'=>'210W'),
            array('maple_room'=>'211W'),
            array('maple_room'=>'212D'),
            array('maple_room'=>'212W'),
            array('maple_room'=>'213W'),
            array('maple_room'=>'214D'),
            array('maple_room'=>'214W'),
            array('maple_room'=>'215D'),
            array('maple_room'=>'215W'),
            array('maple_room'=>'216W'),
            array('maple_room'=>'217W'),
            array('maple_room'=>'218W'),
            array('maple_room'=>'219D'),
            array('maple_room'=>'219W'),
            array('maple_room'=>'220D'),
            array('maple_room'=>'220W'),
            array('maple_room'=>'221W'),
            array('maple_room'=>'222D'),
            array('maple_room'=>'222W'),
            array('maple_room'=>'223D'),
            array('maple_room'=>'223W')
        ));
    }
}