<?php

namespace Tests\Feature\Pages;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutPageTest extends TestCase
{
    /** @test */
    function the_index_route_displays_about_page()
    {
        $response = $this->get('/');

        $response->assertSuccessful();
        $response->assertSee('Hey!');
    }

    /** @test */
    function guest_can_view_about_page()
    {
        $response = $this->get(route('about'));

        $response->assertSuccessful();
        $response->assertSee('Hey!');
    }
}
