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
             ['rate'=>50.00,'description'=>'Single Room Rate, 1 Person'],
             ['rate'=>80.00,'description'=>'Double Room Rate, 1 Person'],
             ['rate'=>90.00,'description'=>'Double Room Rate, 2+ Persons'],
             ['rate'=>90.00, 'description'=>'Executive Room Rate, 1 Person'],
             ['rate'=>100.00,'description'=>'Executive Room Rate, 2+ Persons'],
             ['rate'=>150.00,'description'=>'Princess Room Rate, 1 Person'],
             ['rate'=>180.00,'description'=>'Princess Room Rate, 2+ Persons']

         ]);
    }
}
