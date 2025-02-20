<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConnersTeacherQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testId = Test::where('slug', 'conners-teacher')->first()->test_id;

        $options = [
            ['id' => 1, 'answer' => 'Hiçbir Zaman', 'score' => 0],
            ['id' => 2, 'answer' => 'Nadiren', 'score' => 1],
            ['id' => 3, 'answer' => 'Sıklıkla', 'score' => 2],
            ['id' => 4, 'answer' => 'Her Zaman', 'score' => 3]
        ];

        $questions = [
            ['title' => 'Kıpır kıpırdır, yerinde duramaz.'],
            ['title' => 'Zamansız ve uyumsuz sesler çıkarır.'],
            ['title' => 'İstekleri hemen yerine getirilmelidir.'],
            ['title' => 'Bilmiş tavırları vardır, bilgiçlik taslar.'],
            ['title' => 'Aniden patlar, ne yapacağı belli olmaz.'],
            ['title' => 'Eleştiriyi kaldıramaz.'],
            ['title' => 'Dikkati dağınıktır, uzun sürmez.'],
            ['title' => 'Diğer çocukları rahatsız eder.'],
            ['title' => 'Hayallere dalar.'],
            ['title' => 'Somurtur, surat asar.'],
            ['title' => 'Bir anı bir anını tutmaz, duyguları çabuk değişir.'],
            ['title' => 'Kavgacıdır.'],
            ['title' => 'Büyüklerin sözünden çıkmaz.'],
            ['title' => 'Hareketlidir, durmak-oturmak bilmez.'],
            ['title' => 'Heyecana kapılıp, düşünmeden hareket eder.'],
            ['title' => 'Öğretmenin ilgisi hep üzerinde olsun ister.'],
            ['title' => 'Göründüğü kadarıyla arkadaşlık grubuna alınmıyor.'],
            ['title' => 'Göründüğü kadarıyla başka çocuklar tarafından kolaylıkla yönlendiriliyor.'],
            ['title' => 'Oyun kurallarına uymaz, mızıkçıdır.'],
            ['title' => 'Göründüğü kadarıyla liderlik özelliğinden yoksundur.'],
            ['title' => 'Başladığı işin sonunu getiremez.'],
            ['title' => 'Olduğundan daha küçükmüş gibi davranır.'],
            ['title' => 'Hatalarını kabul etmez, suçu başkalarının üzerine atar.'],
            ['title' => 'Diğer çocuklarla iyi geçinemez.'],
            ['title' => 'Sınıf arkadaşlarıyla yardımlaşmaz.'],
            ['title' => 'Zorluklardan hemen yılar.'],
            ['title' => 'Öğretmenle işbirliğine girmez.'],
            ['title' => 'Zor öğrenir.'],
        ];

        foreach ($questions as $index => $question) {
            Question::create([
                'sorting_number' => $index + 1,
                'test_id' => $testId,
                'title' => $question['title'],
                'types' => null,
                'items' => json_encode($options)
            ]);
        }
    }
}
