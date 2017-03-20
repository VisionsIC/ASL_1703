<?php

use Illuminate\Database\Seeder;

class WcModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('wc_models')->insert(array(
            array('wc_model'=>'Pick Wheelchair Model...'),
            array('wc_model'=>'9000 XT'),
            array('wc_model'=>'9000 XLT'),
            array('wc_model'=>'9000 SL'),
            array('wc_model'=>'Tracer'),
            array('wc_model'=>'Cruiser X4'),
            array('wc_model'=>'Cruiser III'),
            array('wc_model'=>'Trident'),
            array('wc_model'=>'Pronto'),
            array('wc_model'=>'Storm Series Torque 3'),
            array('wc_model'=>'Storm Series 3G Torque SP'),
            array('wc_model'=>'TDX SP'),
            array('wc_model'=>'Q6 Edge'),
            array('wc_model'=>'Q6 Edge 2.0'),
            array('wc_model'=>'Q6 Edge Z'),
            array('wc_model'=>'Q6 Edge HD'),
            array('wc_model'=>'Q1450'),
            array('wc_model'=>'Q610'),
            array('wc_model'=>'Q6 Edge X'),
            array('wc_model'=>'Rival'),
            array('wc_model'=>'J6'),
            array('wc_model'=>'Select Elite'),
            array('wc_model'=>'Select 6'),
            array('wc_model'=>'Elite HD'),
            array('wc_model'=>'Elite ES'),
            array('wc_model'=>'Elite ES-1'),
            array('wc_model'=>'Elite ES Portable'),
            array('wc_model'=>'Elite 14'),
            array('wc_model'=>'614 HD'),
            array('wc_model'=>'Sport Portable'),
            array('wc_model'=>'Sport 2'),
            array('wc_model'=>'S-Ergo ATX'),
            array('wc_model'=>'Iris'),
            array('wc_model'=>'TS'),
            array('wc_model'=>'Elegance Silver'),
            array('wc_model'=>'Elegance Gold'),
            array('wc_model'=>'Pulse 6'),
            array('wc_model'=>'QM-710'),
            array('wc_model'=>'QM-715 HD'),
            array('wc_model'=>'QM-720'),
            array('wc_model'=>'VIP-515'),
            array('wc_model'=>'SR45'),
            array('wc_model'=>'Solara 3G')
        ));
    }
}
