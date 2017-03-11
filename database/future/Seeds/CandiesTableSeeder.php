<?php

use Illuminate\Database\Seeder;

class CandiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records from the 'candies' table.
        DB::table('candies')->insert(array(
            array('candy_flavor'=>'Choose Candy Flavor...','candy_flavor_id'=>'0',),
            array('candy_flavor'=>'Licorice','candy_flavor_id'=>'1',),
            array('candy_flavor'=>'Tic Tacks','candy_flavor_id'=>'2',),
            array('candy_flavor'=>'M&Ms','candy_flavor_id'=>'3',),
            array('candy_flavor'=>'Swedish Fish','candy_flavor_id'=>'4',),
            array('candy_flavor'=>'Sour Patch Kids','candy_flavor_id'=>'5',),
            array('candy_flavor'=>'Lollipop','candy_flavor_id'=>'6',),
            array('candy_flavor'=>'Dots','candy_flavor_id'=>'7',),
            array('candy_flavor'=>'KitKat','candy_flavor_id'=>'8',),
            array('candy_flavor'=>'Twizzlers','candy_flavor_id'=>'9',),
            array('candy_flavor'=>'Sweet Tarts','candy_flavor_id'=>'10',),
            array('candy_flavor'=>'Snickers','candy_flavor_id'=>'11',)
        ));
    }
}
