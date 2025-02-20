<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConnersParentQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testId = Test::where('slug', 'conners-parent')->first()->test_id;

        $options = [
            ['id' => 1, 'answer' => 'Hiçbir Zaman', 'score' => 0],
            ['id' => 2, 'answer' => 'Nadiren', 'score' => 1],
            ['id' => 3, 'answer' => 'Sıklıkla', 'score' => 2],
            ['id' => 4, 'answer' => 'Her Zaman', 'score' => 3]
        ];

        $questions = [
            ['title' => 'Eli boş durmaz sürekli bir şeylerle oynar.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Büyüklere karşı arsız ve küstah davranır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Arkadaşlık kurmada ve sürdürmede zorlanır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Çabuk heyecanlanır, ataktır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Her şeye karışır ve her şeyi yönetmek ister.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
            ])],
            ['title' => 'Bir şeyler çiğner veya emer.(parmak, giysi, örtü vb.)', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Sık sık ve kolayca ağlar.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Her an sataşmaya hazırdır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Hayallere dalar.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Zor öğrenir.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Kıpır kıpırdır, tez canlıdır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
                [
                    'id' => 3,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Ürkektir.(yeni durum, insan ve yerlerden)', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Yerinde duramaz, her an harekete hazırdır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Zarar verir.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 3,
                    'name' => 'Hiperaktivite'
                ],
                [
                    'id' => 4,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Yalan söyler, masallar uydurur.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Utangaçtır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 3,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Yaşıtlarından daha sık başını derde sokar.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 3,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Yaşıtlarından farklı konuşur.(çocuksu, kekeleme, zor anlaşılma)', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Hatalarını kabullenmez, başkalarını suçlar.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Kavgacıdır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
            ])],
            ['title' => 'Somurtkan ve asık suratlıdır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Çalma huyu vardır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Söz dinlemez, isteksiz ya da zorla dinler.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 3,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Başkalarına göre endişelidir.(yalnız kalma, hastalık, ölüm konusunda)', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 3,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Başladığı bir işin sonunu getiremez.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 2,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Hassastır, kolay incinir.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 3,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Kabadayılık taslar, başkalarını rahatsız eder.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Karşıt Gelme Bozukluğu'
                ],
                [
                    'id' => 3,
                    'name' => 'Davranım Bozukluğu'
                ],
            ])],
            ['title' => 'Tekrarlayıcı, durduramadığı hareketleri vardır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Kaba ve acımasızdır.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Yaşına göre daha çocuksudur.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Dikkati kolay dağılır ya da uzun süre toplayamaz.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Baş ağrıları olur.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Ruh halinde ani ve göze batan değişikler olur.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Kuralar ve kısıtlamalardan hoşlanmaz, uymaz.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'DİĞER'
                ],
            ])],
            ['title' => 'Sürekli kavga eder.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Kardeşleriyle iyi geçinemez.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'DİĞER'
                ],
            ])],
            ['title' => 'Zora gelemez.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Diğer çocukları rahatsız eder.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
            ])],
            ['title' => 'Genelde hoşnutsuz bir çocuktur.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Yeme sorunları vardır.(iştahsızlık, yemek sırasında sofradan sık sık kalkma)', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Karın ağrıları olur.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'DİĞER'
                ],
            ])],
            ['title' => 'Uyku sorunları vardır.(uykuya kolay dalamaz, geceleri kalkar, erken uyanır)', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Çeşitli ağrı ve sancıları olur.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Bulantı ve kusmaları olur.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Çeşitli ağrı ve sancıları olur.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Aile içinde daha az kayrıldığını düşünür.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'DİĞER'
                ],
            ])],
            ['title' => 'Övünür, böbürlenir.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'İtilip kakılmaya müsaittir.', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],
            ['title' => 'Dışkılama sorunları vardır.(sık ishaller, kabızlık ve düzensiz tuvalet alışkanlığı)', 'type' => json_encode([
                [
                    'id' => 1,
                    'name' => 'Dikkat Eksikliği'
                ],
                [
                    'id' => 2,
                    'name' => 'Hiperaktivite'
                ],
            ])],

        ];

        foreach ($questions as $index => $question) {
            Question::create([
                'sorting_number' => $index + 1,
                'test_id' => $testId,
                'title' => $question['title'],
                'types' => $question['type'],
                'items' => json_encode($options)
            ]);
        }
    }
}
