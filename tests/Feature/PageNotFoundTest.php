<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageNotFoundTest extends TestCase
{
    /** @test */
    function it_shows_a_404_page_for_nonexisting_pages()
    {
        $response = $this->get('/some-random-url');

        $response->assertNotFound();
        $response->assertSee('404');
    }
}
