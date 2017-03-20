<?php

use Illuminate\Database\Seeder;

class SpruceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('spruce')->insert(array(
            array('spruce_room'=>'Choose Spruce Room...'),
            array('spruce_room'=>'101D'),
            array('spruce_room'=>'101W'),
            array('spruce_room'=>'102D'),
            array('spruce_room'=>'102W'),
            array('spruce_room'=>'103D'),
            array('spruce_room'=>'103W'),
            array('spruce_room'=>'104D'),
            array('spruce_room'=>'104W'),
            array('spruce_room'=>'105D'),
            array('spruce_room'=>'105W'),
            array('spruce_room'=>'106D'),
            array('spruce_room'=>'106W'),
            array('spruce_room'=>'107D'),
            array('spruce_room'=>'107W'),
            array('spruce_room'=>'108D'),
            array('spruce_room'=>'108W'),
            array('spruce_room'=>'109D'),
            array('spruce_room'=>'109W'),
            array('spruce_room'=>'110D'),
            array('spruce_room'=>'110W'),
            array('spruce_room'=>'111D'),
            array('spruce_room'=>'111W'),
            array('spruce_room'=>'112D'),
            array('spruce_room'=>'112W'),
            array('spruce_room'=>'113D'),
            array('spruce_room'=>'113W'),
            array('spruce_room'=>'114D'),
            array('spruce_room'=>'114W'),
            array('spruce_room'=>'115D'),
            array('spruce_room'=>'115W'),
            array('spruce_room'=>'116D'),
            array('spruce_room'=>'116W'),
            array('spruce_room'=>'117W'),
            array('spruce_room'=>'118D'),
            array('spruce_room'=>'118W'),
            array('spruce_room'=>'119D'),
            array('spruce_room'=>'119W'),
            array('spruce_room'=>'120D'),
            array('spruce_room'=>'120W'),
            array('spruce_room'=>'121D'),
            array('spruce_room'=>'121W'),
            array('spruce_room'=>'122D'),
            array('spruce_room'=>'122W')
        ));
    }
}
