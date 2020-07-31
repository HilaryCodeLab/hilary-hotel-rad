<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /**
     * testing roomStatuses
     */

    public function test_roomStatuses_route()
    {
        $response = $this->get('/roomStatuses');
        $response->assertStatus(200);
    }

    public function test_roomStatuses_create(){
        $response = $this->get('roomStatuses/create');
        $response->assertSuccessful();
    }

    public function test_roomStatus_route()
    {
        $response = $this->get('/roomStatuses/2');
        $response->assertStatus(200);
    }

    /**
     * testing feedbackSubjects
     */
    public function test_feedbackSubjects_route()
    {
        $response = $this->get('/feedbackSubjects');
        $response->assertStatus(200);
    }

    public function test_feedbackSubject_route()
    {
        $response = $this->get('/feedbackSubjects/1');
        $response->assertStatus(200);
    }

    public function test_feedbackSubjects_create(){
        $response = $this->get('feedbackSubjects/create');
        $response->assertSuccessful();
    }

    /**
     * testing rates
     */
    public function test_rates_route()
    {
        $response = $this->get('/rates');
        $response->assertStatus(200);
    }

    public function test_rates_create(){
        $response = $this->get('rates/create');
        $response->assertSuccessful();
    }

    public function test_rate_route()
    {
        $response = $this->get('rates/3');
        $response->assertStatus(200);
    }

    public function test_bookings_create(){
        $response = $this->get('bookings/create');
        $response->assertSuccessful();
    }

}
