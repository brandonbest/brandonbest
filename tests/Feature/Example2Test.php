<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\Traits\RefreshDatabase;

class ExampleTest2 extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTestTwo()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
