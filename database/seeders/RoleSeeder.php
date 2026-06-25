<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            'Administrator',
            'Operator',
            'Pimpinan',
            'Masyarakat',
        ])->each(fn (string $role): Role => Role::firstOrCreate(['name' => $role]));
    }
}
