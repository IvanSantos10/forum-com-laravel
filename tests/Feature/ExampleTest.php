<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testReplies()
    {
        $this->seed('RepliesTableSeeder');

        $response = $this->get('/threads/1');
        $response->assertStatus(200);

        $response = $this->get('/threads/2');
        $response->assertStatus(200);

        $response = $this->get('/threads/a');
        $response->assertStatus(404);
    }
}
