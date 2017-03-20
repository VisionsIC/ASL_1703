<?php

use Illuminate\Database\Seeder;

class AccessTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('access_type')->insert(array(
            array('access_type' => 'granted', 'access_type_id' => '0',),
            array('access_type' => 'denied', 'access_type_id' => '1',),
        ));
    }
}
