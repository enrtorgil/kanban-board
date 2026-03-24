<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions(); // Clear cached permissions

        $superAdmin = Role::firstOrCreate([
            'name'       => 'superadmin',
            'guard_name' => 'web',
        ]);

        Role::firstOrCreate([
            'name'       => 'user',
            'guard_name' => 'web',
        ]);

        $user = User::firstOrCreate(
            ['email' => 'superadmin@kanban.test'],
            [
                'name'      => 'superadmin',
                'password'  => 'superadmin',
                'is_active' => true,
            ]
        );

        if (! $user->hasRole('superadmin')) {
            $user->assignRole($superAdmin);
        }
    }
}
