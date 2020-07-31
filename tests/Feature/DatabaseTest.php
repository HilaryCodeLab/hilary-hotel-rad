<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;


class DatabaseTest extends TestCase
{
//    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_booking_staff_role()
    {
        $user = factory(\App\User::class)->create();
        $user->assignRole('Booking Staff');
        $response = $this->actingAs($user)->get('/bookings');
        $response->assertSuccessful();
    }

    public function test_roles_table(){
        $this->assertDatabaseHas('roles',[
          'name' =>  'Manager',
        ]);
    }

    public function test_roles_guest(){
        $this->assertDatabaseHas('roles',[
            'name' =>  'Guest',
        ]);
    }

    public function test_roles_count(){
        $this->assertDatabaseCount('roles',6);
    }

    public function testDatabase()
    {

        $user = factory(\App\User::class)->make();
        $response = $this->post(route('users.store'),$user->toArray());
        $response->assertStatus(403);

    }

    public function test_create_feedbackSubject()
    {
        $user = factory(\App\User::class)->make();
        $user->hasRole('Guest');
        $feedback = factory(\App\FeedbackSubjects::class)->make();
        $response = $this->actingAs($user)->post(route('feedbackSubjects.store'),$feedback->toArray());
        $response->assertStatus(302);

    }




}
