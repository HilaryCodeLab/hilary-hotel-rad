<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call
         ([
            RateSeeder::class,
            FeedbackSubjectsSeeder::class,
            RoomStatusesSeeder::class,
            RoleSeeder::class,
            PermissionTableSeeder::class,
            Assign_roles_permissions::class,
            BookingSeeder::class,

         ]);
    }
}
