<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('login page renders with layout, navbar, footer, and logo', function () {
    $response = $this->get(route('login'));

    $response->assertStatus(200)
        ->assertSee('Jamu Kita')
        ->assertSee('Memurnikan Tradisi Jamu untuk Keseimbangan Jiwa')
        ->assertSee('Rempah Murni')
        ->assertSee('Racikan Unggulan Musim Ini')
        ->assertSee('Selamat Datang Kembali')
        ->assertSee('Masuk ke Jamu Kita')
        ->assertSee('logo projek ppl .jpeg')
        ->assertSee('Kedai Jamu Pusat');
});

test('login validates required fields', function () {
    $response = $this->post(route('login.authenticate'), []);

    $response->assertSessionHasErrors(['email', 'password']);
});

test('user can login with valid credentials', function () {
    $user = User::factory()->create([
        'password' => bcrypt('secret123'),
    ]);

    $response = $this->post(route('login.authenticate'), [
        'email' => $user->email,
        'password' => 'secret123',
    ]);

    $this->assertAuthenticatedAs($user);
    $response->assertRedirect(route('home'));
});
