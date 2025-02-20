<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ABCQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testId = Test::where('slug', 'abc')->first()->test_id;

        $categories = array(
            'Duyusal',
            'İlişki Kurma',
            'Beden ve nesne kullanımı',
            'Dil Becerileri',
            'Sosyal ve Özbakım'
        );

        $questions = [
            ['category' => 2, 'title' => 'Kendi etrafında uzun süre döner', 'score' => 4],
            ['category' => 4, 'title' => 'Basit bir işi öğrenir fakat çabuk unutur', 'score' => 2],
            ['category' => 1, 'title' => 'Sosyal/çevresel uyaranlara çoğu zaman dikkat etmez', 'score' => 4],
            ['category' => 3, 'title' => 'Basit emirleri bir kere söylendiğinde yerine getirmez (otur, buraya gel, ayağa kalk gibi)', 'score' => 1],
            ['category' => 2, 'title' => 'Oyuncakları uygun şekilde kullanmaz (örn. tekerlekleri döndürür)', 'score' => 2],
            ['category' => 0, 'title' => 'Öğrenme sırasında görsel ayırt etmesi zayıftır (büyüklük, renk ya da pozisyon gibi bir özelliğe takılır kalır)', 'score' => 2],
            ['category' => 1, 'title' => 'Sosyal gülümsemesi yoktur', 'score' => 2],
            ['category' => 3, 'title' => 'Zamirleri ters kullanır (ben yerine sen)', 'score' => 3],
            ['category' => 2, 'title' => 'Belirli nesneleri bırakmamak için ısrar eder', 'score' => 3],
            ['category' => 0, 'title' => 'İşitmiyor gibi görünür, bu nedenle bir işitme kaybı olduğu kuşkusu uyandırır', 'score' => 3],
            ['category' => 3, 'title' => 'Konuşması detone ve aritmiktir', 'score' => 4],
            ['category' => 2, 'title' => 'Kendi kendine uzun süre sallanır', 'score' => 4],
            ['category' => 1, 'title' => 'Kendisine uzanıldığında kollarını uzatmaz (ya da bebekken uzatmazdı)', 'score' => 2],
            ['category' => 4, 'title' => 'Günlük programındaki/çevredeki değişikliklere aşırı tepkiler verir', 'score' => 3],
            ['category' => 3, 'title' => 'Başka insanların arasındayken çağrıldığında kendi ismine tepki vermez (Ayşe, Can, Zeynep)', 'score' => 2],
            ['category' => 2, 'title' => 'Kendi etrafında dönme, parmak ucunda yürüme, el çırpma gibi davranışları keserek birden bağırır ve ani hareketler yapar', 'score' => 4],
            ['category' => 1, 'title' => 'Başka insanların yüz ifadelerine ve duygularına tepkisizdir', 'score' => 3],
            ['category' => 3, 'title' => '“Evet” veya “ben” sözcüklerini nadiren kullanır', 'score' => 2],
            ['category' => 4, 'title' => 'Gelişimin bir alanındaki özel yetenekleri zeka geriliği kuşkusunu dışlar niteliktedir', 'score' => 4],
            ['category' => 3, 'title' => 'Yer bildiren sözcükleri içeren basit emirleri yerine getirmez (“topu kutunun üstüne koy” ya da “topu kutunun içine koy” gibi)', 'score' => 1],
            ['category' => 0, 'title' => 'Bazen yüksek bir sese sağır olduğunu düşündürürcesine “irkilme” tepkisi göstermez.', 'score' => 3],
            ['category' => 2, 'title' => 'Ellerini amaçsızca sallar', 'score' => 4],
            ['category' => 4, 'title' => 'Büyük öfke nöbetleri ya da sık sık küçük öfke nöbetleri geçirir', 'score' => 3],
            ['category' => 1, 'title' => 'Göz temasından aktif bir şekilde kaçınır', 'score' => 4],
            ['category' => 1, 'title' => 'Dokunulmaya ya da tutulmaya karşı koyar', 'score' => 4],
            ['category' => 0, 'title' => 'Bazen, çürükler, kesikler ve iğne yapılma gibi acı verici uyaranlara hiç tepki vermez', 'score' => 3],
            ['category' => 1, 'title' => 'Gergin ve kucaklanılması güçtür (şimdi ya da bebekken)', 'score' => 3],
            ['category' => 1, 'title' => 'Kucaklandığında pelte gibidir (sarılmaz, tutunmaz)', 'score' => 2],
            ['category' => 3, 'title' => 'İstediği şeyleri göstererek elde eder', 'score' => 2],
            ['category' => 2, 'title' => 'Parmak uçlarında yürür', 'score' => 2],
            ['category' => 4, 'title' => 'Başkalarını ısırarak, vurarak, tekmeleyerek incitir', 'score' => 2],
            ['category' => 3, 'title' => 'Cümleleri defalarca tekrarlar', 'score' => 3],
            ['category' => 1, 'title' => 'Oyun oynarken başka çocukları taklit etmez', 'score' => 3],
            ['category' => 0, 'title' => 'Gözlerine parlak bir ışık tutulduğunda genellikle gözlerini kırpmaz', 'score' => 1],
            ['category' => 2, 'title' => 'Başına vurarak, ellerini ısırarak kendine zarar verir', 'score' => 3],
            ['category' => 4, 'title' => 'İhtiyaçlarının hemen yerine getirilmesini ister, bekleyemez', 'score' => 2],
            ['category' => 3, 'title' => 'İsmi söylenen beş nesneden daha fazlasını işaret ederek gösteremez', 'score' => 1],
            ['category' => 1, 'title' => 'Hiç arkadaşlık ilişkisi geliştiremez', 'score' => 4],
            ['category' => 0, 'title' => 'Bir çok sese kulaklarını kapatır', 'score' => 4],
            ['category' => 2, 'title' => 'Sık sık nesneleri döndürür, çevirir ve çarpar', 'score' => 4],
            ['category' => 4, 'title' => 'Tuvalet eğitimine ilişkin sorunları vardır', 'score' => 1],
            ['category' => 3, 'title' => 'İsteklerini ve ihtiyaçlarını belirtmek için ya hiç konuşmaz ya da bir günde kendiliğinden kullandığı sözcük sayısı beşi geçmez', 'score' => 2],
            ['category' => 1, 'title' => 'Çoğunlukla korkar yada çok kaygılanır', 'score' => 3],
            ['category' => 0, 'title' => 'Gün ışığı karşısında gözlerini kısar, kaşlarını çatar ya da gözlerini kapatır', 'score' => 3],
            ['category' => 4, 'title' => 'Yardımsız kendisi giyinemez', 'score' => 1],
            ['category' => 3, 'title' => 'Sesleri ya da sözcükleri sürekli tekrar eder', 'score' => 3],
            ['category' => 1, 'title' => 'Bakışları insanları "delip geçer"', 'score' => 4],
            ['category' => 3, 'title' => 'Başkalarının cümlelerini ya da sorularını tekrarlar', 'score' => 4],
            ['category' => 4, 'title' => 'Çoğunlukla çevresindekilerin ve tehlikeli durumların farkında değildir', 'score' => 2],
            ['category' => 4, 'title' => 'Cansız şeylerle oynamayı ve zaman geçirmeyi tercih eder', 'score' => 4],
            ['category' => 2, 'title' => 'Çevresindeki nesnelere dokunur, koklar ve/veya tadar', 'score' => 3],
            ['category' => 0, 'title' => 'Yeni bir kişiyle karşılaştığında sıklıkla hiç bir görsel tepki vermez', 'score' => 3],
            ['category' => 2, 'title' => 'Nesneleri sıralama gibi karmaşık ritüeller içine girer', 'score' => 4],
            ['category' => 2, 'title' => 'Çok zarar vericidir, oyuncaklarını ve ev eşyalarını kısa zamanda kırar', 'score' => 2],
            ['category' => 4, 'title' => 'Gelişimsel geçikme belirtileri 30.ayda ya da daha önce ortaya çıkmıştır', 'score' => 1],
            ['category' => 3, 'title' => 'Gün içinde kendiliğinden, iletişimi başlatmak için kullandığı ifadelerin sayısı otuzu geçmez', 'score' => 3],
            ['category' => 0, 'title' => 'Uzun süreler boşluğa bakar', 'score' => 4],
        ];

        foreach ($questions as $index => $question) {
            Question::create([
                'sorting_number' => $index + 1,
                'test_id' => $testId,
                'title' => $question['title'],
                'types' => json_encode([
                    'id' => 1,
                    'name' => $categories[$question['category']]
                ]),

                'items' => json_encode([
                    [
                        'id' => 1,
                        'answer' => 'Evet',
                        'score' => $question['score'],
                    ],
                    [
                        'id' => 2,
                        'answer' => 'Hayır',
                        'score' => 0
                    ]
                ])
            ]);
        }
    }
}
