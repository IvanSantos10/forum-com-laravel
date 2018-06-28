<?php

namespace Tests\Feature;

use App\Thread;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    public function testActionIndexOnController()
    {
        $user = factory(User::class)->create();

        $this->seed('ThreadsTableSeeder');

        $threads = Thread::orderBy('updated_at', 'desc')->paginate();
        $response = $this
            ->actingAs($user)
            ->json('GET', '/threads');

        $response->assertStatus(200)
            ->assertJsonFragment([$threads->toArray()['data']]);
    }

    public function testActionStoreOnController()
    {
        $user = factory(User::class)->create();

        $response = $this
            ->actingAs($user)
            ->json('POST', '/threads', [
                'title' => 'Meu primeiro tópico',
                'body'  => 'Este é um exemplo de tópico'
            ]);

        $thread = Thread::find(1);

        $response->assertStatus(200)
            ->assertJsonFragment(['created' => 'success'])
            ->assertJsonFragment([$thread->toArray()]);
    }
}
