<?php

use Illuminate\Database\Seeder;

class RoomStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_statuses')->insert
        ([
           ['name'=>'AVBL','description'=>'Available'],
           ['name'=>'SERV','description'=>'Service Required'],
           ['name'=>'MAIN','description'=>'Maintenance Required'],
           ['name'=>'OOSV','description'=>'Out of Service'],
           ['name'=>'UNAV','description'=>'Unavailable'],
           ['name'=>'OCCP','description'=>'Occupied']

       ]);
    }
}
