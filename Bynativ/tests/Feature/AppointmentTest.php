<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppointmentTest extends TestCase
{
    /**
     * Display form
     *
     * @test
     * @return void
     */
    public function it_can_display_form()
    {
        $response = $this->get(route('appointments.create'));

        $response->assertStatus(200);
    }

    /**
     * Get last appointment
     *
     * @test
     * @return void
     */
    public function it_can_get_last_appointment()
    {
        $response = $this->get(route('appointments.last'));

        $response->assertStatus(200);
    }

    /**
     * Submit form
     *
     * @test
     * @return void
     */
    public function it_can_submit_the_form()
    {
        $response = $this->post(route('appointments.store'), [
            'name'      => 'Test',
            'phone'     => '0101010101',
            'email'     => 'test@test.com',
            'date'      => '2022-01-01T10:00',
            'message'   => 'Test message'
        ]);
        $response->assertStatus(302);

        $this->get(route('appointments.create'))->assertStatus(200);
    }

    /**
     * Get last appointment
     *
     * @test
     * @return void
     */
    public function it_can_get_appointments_api()
    {
        $response = $this->get(route('api.list'));

        $response->assertStatus(200);
    }
}
