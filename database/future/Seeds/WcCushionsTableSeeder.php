<?php

use Illuminate\Database\Seeder;

class WcCushionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('status_type')->insert(array(
            array('status_type' => 'available', 'status_type_id' => '0',),
            array('status_type' => 'unavailable', 'status_type_id' => '1',),
            array('status_type' => 'active', 'status_type_id' => '2',),
            array('status_type' => 'inactive', 'status_type_id' => '3',)
        ));
    }
}
