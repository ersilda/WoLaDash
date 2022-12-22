<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # ID = 1
        Role::query()->create([
            'slug'        => 'administrator',
            'name'        => 'Administrator',
            'description' => 'Admin Access Role',
            'status'      => true,
            'permissions' => PermissionEnum::values(),
        ]);

        # ID = 2
        Role::query()->create([
            'slug'        => 'user',
            'name'        => 'User',
            'description' => 'User Access Role',
            'status'      => true,
            'permissions' => [],
        ]);
    }
}
