<?php

namespace Database\Seeders;


use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tests = [
            [
                'name' => 'ABC Ölçeği',
                'slug' => 'abc',
                'min_age' => 3,
                'max_age' => 15,
            ],
            [
                'name' => 'Davranış Değerlendirme Ölçeği',
                'slug' => 'acting',
                'min_age' => 4,
                'max_age' => 18,
            ],
            [
                'name' => 'Otizm Ölçeği',
                'slug' => 'otizm',
                'min_age' => 2,
                'max_age' => null,
            ],
            [
                'name' => 'Öğrenme Bozukluğu Belirti Tarama Testi',
                'slug' => 'learning',
                'min_age' => 6,
                'max_age' => 15,
            ],
            [
                'name' => 'Öykü Formu',
                'slug' => 'history',
                'min_age' => 0,
                'max_age' => 18,
            ],
            [
                'name' => 'Conners Öğretmen Değerlendirme Ölçeği',
                'slug' => 'conners-teacher',
                'min_age' => 3,
                'max_age' => 17,
            ],
            [
                'name' => 'Conners Ebeveyen Değerlendirme Ölçeği',
                'slug' => 'conners-parent',
                'min_age' => 3,
                'max_age' => 17,
            ],
        ];

        foreach ($tests as $test) {
            Test::create($test);
        }
    }
}
