<?php

use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

test('database seeder populates roles, users with hashed passwords, and products', function () {
    $this->seed(DatabaseSeeder::class);

    expect(Role::count())->toBe(2)
        ->and(User::count())->toBe(3)
        ->and(Product::count())->toBe(3);

    $operasional = User::where('email', 'operasional@jamukita.test')->first();
    $pembukuan = User::where('email', 'pembukuan@jamukita.test')->first();
    $buyer = User::where('email', 'test@example.com')->first();

    expect($operasional)->not->toBeNull()
        ->and($operasional->role?->slug)->toBe(Role::ADMIN_OPERASIONAL)
        ->and(Hash::check('password', $operasional->password))->toBeTrue()
        ->and($pembukuan)->not->toBeNull()
        ->and($pembukuan->role?->slug)->toBe(Role::ADMIN_PEMBUKUAN)
        ->and(Hash::check('password', $pembukuan->password))->toBeTrue()
        ->and($buyer)->not->toBeNull()
        ->and($buyer->role_id)->toBeNull();
});

test('product factory creates valid products', function () {
    $product = Product::factory()->create();

    expect($product->exists)->toBeTrue()
        ->and($product->price)->toBeInt()
        ->and($product->is_available)->toBeBool();
});
