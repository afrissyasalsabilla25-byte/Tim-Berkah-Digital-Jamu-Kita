<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('guests are redirected to login when accessing beranda', function () {
    $this->get(route('home'))
        ->assertRedirect(route('login'));

    $this->get(route('beranda'))
        ->assertRedirect(route('login'));
});

test('authenticated user can view beranda page with navbar and product catalog', function () {
    $user = User::factory()->create([
        'name' => 'Ratna Dewi',
    ]);

    $response = $this->actingAs($user)->get(route('home'));

    $response->assertStatus(200)
        ->assertSee('Ratna Dewi')
        ->assertSee('Beranda')
        ->assertSee('Keluar')
        ->assertSee('Warisan Racikan 1928')
        ->assertSee('Menghidupkan Tradisi Rempah')
        ->assertSee('Katalog Racikan Produk Pilihan')
        ->assertSee('Kunyit Asam Sriwedari')
        ->assertSee('Beras Kencur Pandan Wangi')
        ->assertSee('Temulawak Jahe Merah')
        ->assertSee('Rp 28.000');
});

test('user sees beranda page immediately after logging in', function () {
    $user = User::factory()->create([
        'name' => 'Ratna Dewi',
        'password' => bcrypt('secret123'),
    ]);

    $response = $this->followingRedirects()->post(route('login.authenticate'), [
        'email' => $user->email,
        'password' => 'secret123',
    ]);

    $this->assertAuthenticatedAs($user);
    $response->assertStatus(200)
        ->assertSee('Katalog Racikan Produk Pilihan')
        ->assertSee('Ratna Dewi');
});
