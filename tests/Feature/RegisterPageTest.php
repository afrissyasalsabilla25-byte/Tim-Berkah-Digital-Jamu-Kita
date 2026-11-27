<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('register page renders split layout from mockup', function () {
    $response = $this->get(route('register'));

    $response->assertStatus(200)
        ->assertSee('Warisan Rempah,')
        ->assertSee('Buat Akun')
        ->assertSee('Daftar Akun Baru')
        ->assertSee('Masuk di sini')
        ->assertSee('Kembali ke beranda');
});

test('register validates required fields and password confirmation', function () {
    $response = $this->post(route('register.store'), [
        'name' => '',
        'email' => '',
        'password' => 'short',
        'password_confirmation' => 'mismatch',
    ]);

    $response->assertSessionHasErrors(['name', 'email', 'password']);
});

test('user can register and is redirected to home', function () {
    $response = $this->post(route('register.store'), [
        'name' => 'Ratna Dewi',
        'email' => 'ratna@jamukita.id',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ]);

    $this->assertDatabaseHas('users', [
        'name' => 'Ratna Dewi',
        'email' => 'ratna@jamukita.id',
        'role_id' => null,
    ]);

    $user = User::where('email', 'ratna@jamukita.id')->first();
    $this->assertAuthenticatedAs($user);
    $response->assertRedirect(route('home'));
});
