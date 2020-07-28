<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutPageTest extends TestCase
{
    /** @test */
    function guest_can_view_about_page()
    {
        $response = $this->get(route('about'));

        $response->assertSuccessful();
        $response->assertSee('Hey!');
    }
}
