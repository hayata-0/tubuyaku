<?php

namespace Tests\Feature\Tweet;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Tweet;

class DeleteTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_login_status()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_register_status()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_forgotpassword_status()
    {
        $response = $this->get('/forgot-password');
        $response->assertStatus(200);
    }

    public function test_tweet_status()
    {
        $response = $this->get('/tweets');
        $response->assertStatus(200);
    }

    public function test_update_status()
    {
        $user = User::factory()->create();
        $tweet = Tweet::factory()->create(['user_id' => $user->id]);
        $this->actingAs($user);
        $response = $this->get('/tweet/update/' . $tweet->id);
        $response->assertStatus(200);
    }



    public function test_delete_successed()
    {
        $user = User::factory()->create();
        $tweet = Tweet::factory()->create(['user_id' => $user->id]);
        $this->actingAs($user);
        $response = $this->delete('/tweet/delete/' . $tweet->id);
        $response->assertRedirect('/tweets');
    }
}
