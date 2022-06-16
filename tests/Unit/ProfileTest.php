<?php

namespace Tests\Unit;

use Symfony\Component\HttpKernel\Profiler\Profile;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_profile()
    {
        $response=$this->get('/profile');
        $response->assertStatus(200);

    }   
}
