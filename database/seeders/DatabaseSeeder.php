<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Artisan::call('key:generate');
        Artisan::call('storage:link');

        $this->call([
            UsersSeeder::class,
            RolesSeeder::class,
            RoleUserSeeder::class,
            ProvincesSeeder::class,
            StatesSeeder::class,
            TestSeeder::class,
            ABCQuestionSeeder::class,
            ActingQuestionSeeder::class,
            OtizmQuestionSeeder::class,
            HistoryQuestionSeeder::class,
            LearningQuestionSeeder::class,
            ConnersTeacherQuestionSeeder::class,
            ConnersParentQuestionSeeder::class,
            PagesSeeder::class,
        ]);

        $seeders = [
            UsersSeeder::class,
            RolesSeeder::class,
            RoleUserSeeder::class,
            ProvincesSeeder::class,
            StatesSeeder::class,
            DatabaseSeeder::class,
            TestSeeder::class,
            ABCQuestionSeeder::class,
            ActingQuestionSeeder::class,
            OtizmQuestionSeeder::class,
            HistoryQuestionSeeder::class,
            LearningQuestionSeeder::class,
            ConnersTeacherQuestionSeeder::class,
            ConnersParentQuestionSeeder::class,
            PagesSeeder::class,
        ];

        foreach ($seeders as $seeder) {
            DB::table('seeds')->insert([
                'seeder' => class_basename($seeder),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
