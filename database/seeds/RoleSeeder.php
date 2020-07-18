<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Booking Staff',
            'General Staff',
            'Maintenance',
            'Manager',
            'Guest'
        ];

        foreach ($roles as $role){

            \Spatie\Permission\Models\Role::create(['name'=>$role]);
        }
    }
}
