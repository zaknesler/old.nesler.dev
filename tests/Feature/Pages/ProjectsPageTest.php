<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsPageTest extends TestCase
{
    /** @test */
    function guests_can_view_projects_page()
    {
        $response = $this->get(route('projects'));

        $response->assertSuccessful();
        $response->assertSee('Tailwind');
    }
}
