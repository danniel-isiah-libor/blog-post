<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

test('show post page', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $post = Post::factory()->create();

    $response = $this->get(route('posts.show', ['post' => $post->uuid]));

    $response->assertViewIs('posts.show');

    $this->assertAuthenticated();
});

test('store post', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $post = Post::factory()->make();

    $response = $this->post(route('posts.store'), $post->toArray());

    $response->assertStatus(302)
        ->assertRedirect(route('posts.index'));

    $this->assertAuthenticated();
});

test('fail store post', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $post = Post::factory()->make(['title' => null]);

    $response = $this->post(route('posts.store'), $post->toArray());

    $response->assertSessionHasErrors('title');

    $this->assertAuthenticated();
});
