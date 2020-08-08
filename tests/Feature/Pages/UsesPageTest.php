<?php

namespace Tests\Feature\Pages;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsesPageTest extends TestCase
{
    /** @test */
    function guest_can_view_uses_page()
    {
        $response = $this->get(route('uses'));

        $response->assertSuccessful();
        $response->assertSee('Sublime');
    }
}
