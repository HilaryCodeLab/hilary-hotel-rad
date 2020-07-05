<?php

use Illuminate\Database\Seeder;

class FeedbackSubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback_subjects')->insert
        ([
             ['subject'=>'General', 'description'=>'General Enquiry/Comments'],
             ['subject'=>'Booking', 'description'=>'Booking Enquiry / Room Availability'],
             ['subject'=>'Thank You', 'description'=>'Message to thank the hotel/staff'],
             ['subject'=>'Complaint', 'description'=>'Had a problem with your booking or stay'],
             ['subject'=>'Help', 'description'=>'Assistance Required'],
             ['subject'=>'Bug', 'description'=>'Problem with the application/web site']

         ]);
    }
}
