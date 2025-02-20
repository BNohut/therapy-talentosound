<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Orchid\Platform\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::firstWhere('slug', 'super-yonetici');
        $user = User::firstWhere('name', 'Süper Yönetici');
        $user->roles()->attach($role);

        $role = Role::firstWhere('slug', 'admin');
        $user = User::firstWhere('name', 'Admin');
        $user->roles()->attach($role);

        $role = Role::firstWhere('slug', 'yonetici');
        $user = User::firstWhere('name', 'Yönetici');
        $user->roles()->attach($role);

        $role = Role::firstWhere('slug', 'kurum-uzmani');
        $user = User::firstWhere('name', 'Kurum Uzmanı');
        $user->roles()->attach($role);

        $role = Role::firstWhere('slug', 'uzman');
        $user = User::firstWhere('name', 'Uzman');
        $user->roles()->attach($role);

        $role = Role::firstWhere('slug', 'danisan');
        $user = User::firstWhere('name', 'Danışan');
        $user->roles()->attach($role);
    }
}
