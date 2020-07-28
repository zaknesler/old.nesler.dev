<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NowPageTest extends TestCase
{
    /** @test */
    function guest_can_view_now_page()
    {
        $response = $this->get(route('now'));

        $response->assertSuccessful();
        $response->assertSee('College');
    }
}
