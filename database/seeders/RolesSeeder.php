<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Role::firstOrCreate([
            'name'       => 'superadmin',
            'guard_name' => 'web',
        ]);

        $userRole = Role::firstOrCreate([
            'name'       => 'user',
            'guard_name' => 'web',
        ]);

        $user = User::firstOrCreate(
            ['email' => 'superadmin@kanban.test'],
            [
                'name'     => 'superadmin',
                'password' => bcrypt('superadmin'),
            ]
        );

        if (! $user->hasRole('superadmin')) {
            $user->assignRole($superAdmin);
        }
    }
}
