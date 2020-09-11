<?php

namespace Tests\Feature;

use BrandonBest\UnittestSqlite\Traits\RefreshDatabase;
use Tests\TestCase;

class Example2Test extends TestCase
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
