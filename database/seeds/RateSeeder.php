<?php

use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->insert
        ([
             ['rate'=>50.00,'room_type'=>'Single','description'=>'Single Room Rate, 1 Person'],
             ['rate'=>80.00,'room_type'=>'Double','description'=>'Double Room Rate, 1 Person'],
             ['rate'=>90.00,'room_type'=>'Double','description'=>'Double Room Rate, 2+ Persons'],
             ['rate'=>90.00,'room_type'=>'Executive', 'description'=>'Executive Room Rate, 1 Person'],
             ['rate'=>100.00,'room_type'=>'Executive','description'=>'Executive Room Rate, 2+ Persons'],
             ['rate'=>150.00,'room_type'=>'Princess','description'=>'Princess Room Rate, 1 Person'],
             ['rate'=>180.00,'room_type'=>'Princess','description'=>'Princess Room Rate, 2+ Persons'],
             ['rate'=>200.00,'room_type'=>'Hollywood','description'=>'Hollywood Twin Room Rate, 1 Person'],
             ['rate'=>250.00,'room_type'=>'Hollywood','description'=>'Hollywood Twin Room Rate, 2+ Persons'],
             ['rate'=>300.00,'room_type'=>'President','description'=>'President Suite Rate, 1 Person'],
             ['rate'=>350.00,'room_type'=>'President','description'=>'President Suite Rate, 2+ Persons'],

         ]);
    }
}
