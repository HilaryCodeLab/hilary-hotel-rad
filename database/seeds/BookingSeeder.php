<?php

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert
        ([
            ['room_number'=>'501','descriptions'=>'West Wing'],
            ['room_number'=>'502','descriptions'=>'West Wing'],
            ['room_number'=>'503','descriptions'=>'West Wing'],
        ]);
    }
}
