<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        // User::factory(10)->create();

        collect([
            ['name' => 'Administrator', 'email' => 'administrator@example.com', 'role' => 'Administrator'],
            ['name' => 'Operator', 'email' => 'operator@example.com', 'role' => 'Operator'],
            ['name' => 'Pimpinan', 'email' => 'pimpinan@example.com', 'role' => 'Pimpinan'],
        ])->each(function (array $user): void {
            User::factory()
                ->create([
                    'name' => $user['name'],
                    'email' => $user['email'],
                ])
                ->assignRole($user['role']);
        });
    }
}
