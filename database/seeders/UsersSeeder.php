<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Orchid\Support\Facades\Dashboard;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Süper Yönetici',
                'email' => "superadmin@admin.com",
                'password' => bcrypt('123123'),
            ],
            [
                'name' => 'Admin',
                'email' => "admin@admin.com",
                'password' => bcrypt('123123'),
            ],
            [
                'name' => 'Yönetici',
                'email' => "yonetici@admin.com",
                'password' => bcrypt('123123'),
            ],
            [
                'name' => 'Kurum Uzmanı',
                'email' => "kurumuzmani@admin.com",
                'password' => bcrypt('123123'),

            ],
            [
                'name' => 'Uzman',
                'email' => "uzman@admin.com",
                'password' => bcrypt('123123'),
            ],
            [
                'name' => 'Danışan',
                'email' => "danisan@admin.com",
                'password' => bcrypt('123123'),
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
        $uzman = User::where('name', 'Uzman')->first();
        $danisan = User::where('name', 'Danışan')->first();
        $danisan->specialist_id = $uzman->user_id;
        $danisan->save();
    }
}
