<?php

use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\RoleSeeder;
use Spatie\Permission\Models\Role;

test('role seeder creates system auth roles', function () {
    $this->seed(RoleSeeder::class);

    expect(Role::pluck('name')->all())->toEqualCanonicalizing([
        'Administrator',
        'Operator',
        'Pimpinan',
        'Masyarakat',
    ]);
});

test('users can be assigned system roles', function () {
    $this->seed(RoleSeeder::class);

    $user = User::factory()->create();

    $user->assignRole('Administrator');

    expect($user->hasRole('Administrator'))->toBeTrue();
});

test('database seeder creates login users for every system role', function () {
    $this->seed(DatabaseSeeder::class);

    expect(User::whereEmail('administrator@example.com')->first()?->hasRole('Administrator'))->toBeTrue()
        ->and(User::whereEmail('operator@example.com')->first()?->hasRole('Operator'))->toBeTrue()
        ->and(User::whereEmail('pimpinan@example.com')->first()?->hasRole('Pimpinan'))->toBeTrue();
});
