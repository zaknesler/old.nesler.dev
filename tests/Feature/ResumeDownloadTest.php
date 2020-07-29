<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResumeDownloadTest extends TestCase
{
    /** @test */
    function guests_can_download_resume()
    {
        $response = $this->get(route('resume'));

        $response->assertSuccessful();
        $response->assertHeader('Content-Disposition');

        $this->assertFileExists($response->baseResponse->getFile());
    }
}
