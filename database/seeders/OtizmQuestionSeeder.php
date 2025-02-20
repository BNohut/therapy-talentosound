<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtizmQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testId = Test::where('slug', 'otizm')->first()->test_id;

        $questions = [
            [
                'title' => 'İNSANLARLA İLİŞKİ', 'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'İnsanlarla ilişkisinde güçlük veya anormallik kanıtı yok-Çocuğun davranışları yaşına uygun. Yapacağı şeyler anlatıldığında biraz utanma, mızmızlık veya sıkıntı gözlenebilir, fakat atipik derecede değildir.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal ilişkiler-çocuk yetişkinin gözüne bakmaktan kaçınabilir, ilişkiye zorlandığında yetişkinden kaçınabilir veya mızmızlık yapabilir, aşırı utangaç olabilir, tipik olarak yetişkine yanıt vermeyebilir veya aynı yaştaki çocuklardan biraz daha fazla olarak anne babaya yapışkanlık gösterebilir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal ilişkiler-çocuk çoğu zaman soğuk (uzak)(yetişkinin farkında değilmiş gibi gözükür) tur. Çoğu zaman çocuğun dikkatini çekmek için ısrarcı ve zorlu çabalar gerekir. Az derecede ilişki çocukla yapılabilir'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Aşırı derecede anormal ilişkiler-Çocuk belirgin derecede uzak ve soğuktur veya yetişkinin yaptıkları şeylerin farkında değildir. Hemen hemen hiç yetişkine yanıt vermez veya ilişki başlatmaz. Çok ısrarcı çabalarla bile çocuğun dikkati hiçbir şekilde çekilemez.'],
                ]
            ],
            [
                'title' => 'TAKLİT',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Uygun taklit-Çocuk beceri düzeyine uygun olan sesleri, kelimeleri ve hareketleri taklit edebilir.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal taklit-Çoğu zaman çocuk alkış veya tek cümlelik basit davranışları taklit edebilir; nadiren zorlama veya özendirme sonrası veya gecikmeli olarak taklit eder.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal taklit-Çocuk yalnızca yetişkinin büyük ısrarı ve yardımı olduğu zamanlarda taklit eder; sıklıkla yalnızca bir gecikme sonrası taklit eder.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Aşırı derecede anormal taklit- Yetişkinin özendirme, zorlama ve yardımı olsa bile, ses, kelime veya hareketleri nadiren veya hiç taklit etmezler.'],
                ],
            ],
            [
                'title' => 'DUYGUSAL TEPKİ',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Yaş ve duruma uygun duygusal tepkiler- Çocuk, yüz ifadesi, duruş ve tarzında bir değişikliğin görüldüğü, uygun tip ve derecede duygusal tepki gösterir.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal duygusal tepkiler-çocuk nadiren biraz uygunsuz tip ve derecede duygusal tepkiler gösterir. Tepkiler bazen çevresindeki nesne veya olaylarla ilişkisizdir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal duygusal tepkiler-çocuk belirgin şekilde uygunsuz tip ve/veya derecede duygusal tepki gösterirler. Tepkiler oldukça kaçıngan veya aşırı ve durumla ilişkisiz olabilir; grimas, gülme olabilir veya belirgin duygusal tepki oluşturan nesne veya olaylar olmasa bile katı olabilir.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Aşırı derecede anormal duygusal tepkiler-tepkiler nadiren duruma uygundur. Çocuk belirli duygu duruma geldiğinde, duygu durumunu değiştirmek çok zordur. Tersi olarak hiçbir değişiklik olmadığı zaman çok farklı duygulanımlar gösterebilir.'],
                ],
            ],
            [
                'title' => 'VÜCUT KULLANIMI',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Yaşa uygun vücut kullanımı-çocuk aynı yaştaki normal çocuklarla aynı kolaylık, çeviklik ve koordinasyonla hareket eder.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal vücut kullanımı- bazı minör tuhaflıklar olabilir, örneğin sakarlık, tekrarlayıcı davranışlar, zayıf koordinasyon veya nadiren daha olağandışı davranışların gözlenmesi.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal vücut kullanımı-Bu yaş çocuğu için açıkça tuhaf veya olağandışı davranışlar şunlar olabilir: garip parmak hareketleri, acayip parmak veya vücut posturü, vücudu dikleştirme veya toplama, kendine yönelik saldırganlık, sallanma, kendi etrafında dönme, parmak oynatma veya parmak uçlarında yürüme.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Orta derecede anormal vücut kullanımı-yukarıda sayılan 91 davranışları yoğun veya sık göstermesi. Bu davranışlar engellemeye çalışma veya diğer etkinliklere çocuğu katılmasına rağmen devam edebilir.'],
                ],
            ],
            [
                'title' => 'NESNE KULLANIMI',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Oyuncak ve diğer nesneleri İlgilenme ve uygun kullanma-beceri düzeylerine uygun oyuncak ve diğer nesnelere uygun ilgi gösterme ve bu oyuncakları uygun tarzda kullanma.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Oyuncak ve diğer nesnelere ilgi ve kullanmada hafif derece uygunsuzluk- çocuk bir oyuncağa atipik ilgi gösterebilir veya uygunsuz çocuksu tarzda oynayabilir (örneğin, oyuncağı etrafa çarpma veya emme)'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Oyuncak ve diğer nesnelere ilgi ve kullanmada orta derece uygunsuzluk-çocuk oyuncak ve diğer nesnelere az ilgi gösterebilir veya bazı tuhaf şekilde bir oyuncak veya nesne kullanarak zaman geçirir. Oyuncağın önemsiz bir parçasına odaklanabilir, ışık saçan nesnelere hayranlık duyabilir, nesnenin bir kısmın tekrarlayıcı bir tarzda hareket ettirebilir veya bir obje ile sürekli oynayabilir.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Oyuncak ve diğer nesnelere ilgi ve kullanmada aşırı derece uygunsuzluk-çocuk yukarıda bahsedilen davranışları yoğunluk ve sıklık olarak daha fazla gösterir. Çocuğu bu uygunsuz etkinliklerden ayırmak güçtür.'],
                ],
            ],
            [
                'title' => 'DEĞİŞİKLİKLERE UYUM SAĞLAMA',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Değişikliklere yaşına uygun tepki- günlük sıradanlıktan değişiklik gösterdiği zaman, çocuk büyük bir sıkıntı göstermeksizin, bu değişiklikleri kabul eder.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Değişikliklere uyumda hafif derecede anormallik-yetişkin görevleri değiştirmeye çalıştığında, çocuk aynı aktivitesine devam edebilir veya aynı materyali kullanabilir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Değişikliklere uyumda orta derecede anormallik-çocuk rutinden olan değişikliklere aktif olarak direnç gösterir veya eski etkinliğine devam etmeye çalışır. Ve onu bu etkinlikten uzaklaştırmak güçtür. Rutini değiştirildiği zaman kızgın veya mutsuz olabilir.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Değişikliklere uyumda aşırı derecede anormallik-çocuk değişikliklere aşırı tepki gösterir. Değişiklik için zorlandığında, aşırı kızgın veya bozulmuş işbirlikçi olur ve öfke nöbetleri gösterir.'],
                ],
            ],
            [
                'title' => 'GÖRSEL TEPKİ',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Yaşına uygun görsel tepki-çocuğun görsel davranışı normaldir ve yaşına uygundur. Görme, yeni bir nesneyi araştırma şekli olarak diğer duyularla birlikte kullanılır.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal görsel tepki- çocuk nesnelere bakmayı çok daha nadiren hatırlar. Çocuk arkadaşlarından çok aynalara veya ışıklara bakmakla daha ilgili olabilir. Nadiren boşluğa bakıp durabilir veya insanların gözüne bakmaktan da kaçınabilir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal görsel tepki- yaptığı şeye büyük olasılıkla bakmaktadır. Boşluğa bakıp durabilmektedir, insanların gözlerine bakmaktan kaçınmaktadır, nesnelere olağandışı açıdan bakmaktadır veya neneleri tutmak için gözlerini çok yaklaştırmaktadır.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Aşırı derecede anormal görsel tepki- çocuk belirgin derecede insanlara ve belirli nesnelere bakmaktan kaçınır ve yukarıda sayılan diğer görsel tuhaflıkların ileri şekilleri gözlenebilir.'],
                ],
            ],
            [
                'title' => 'DİNLEME TEPKİSİ',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Yaşına uygun dinleme tepkisi- çocuğun dinleme davranışı normaldir ve yaşına uygundur. Dinleme diğer duyularla birlikte kullanılır.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal dinleme tepkisi-tepkide kısmi eksiklikler olabilir veya belli seslere hafif aşırı tepkiler olabilir. Seslere tepkiler gecikmiş olabilir ve çocuğun dikkatini çekmek için sesleri tekrarlamak gerekebilir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal dinleme tepkisi-çocuğun seslere tepkisi çeşitlidir; sıklıkla ilk bir kaç kez duyduğu seslere karşı umursamazdır; her gün duyduğu sesleri işittiğinde irkilebilir veya kulaklarını kapayabilir.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'İleri derecede anormal dinleme tepkisi-çocuk seslere karşı, sesin tipine 93 bakmaksızın, aşırı tepki gösterir ve/veya hiç tepki göstermez.'],
                ],
            ],
            [
                'title' => 'TAD, KOKU VE DOKUNMA TEPKİLERİ VE KULLANIMI',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Tat, koku ve dokunmayı normal kullanma ve normal tepki-çocuk yeni nesneleri yaşına uygun bir tarzda araştırır, genellikle hissederek ve bakarak. Uygun olduğunda tat ve koku kullanılabilir. Az bir ağrıya reaksiyon olduğunda çocuk rahatsızlığını ifade eder fakat aşırı tepki göstermez.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Tat, koku ve dokunmayı hafif derecede anormal kullanma ve tepki- çocuk nesneleri ağzına götürmekte ısrarcı olabilir; yenmeyen nesneleri koklayabilir veya tadabilir; hafif bir acıya normal çocuğun gösterdiği huzursuzluğu göstermeyebilir veya aşırı gösterebilir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Tat, koku ve dokunmayı orta derecede anormal kullanma ve tepki-çocuk nesne ve insanlara dokunma, koklama veya tatma ile orta derecede meşgul olur. Acıya ya çok tepki veya çok çok az tepki gösterir.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Tat, koku ve dokunmayı ileri derecede anormal kullanma ve tepki- çocuk nesne ve insanlara dokunma, koklama veya tatma ile aşırı derecede meşgul olur. Acıya ya aşırı tepki veya hiç tepki göstermez.'],
                ],
            ],
            [
                'title' => 'KORKU VEYA ÜRKEKLİK',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Normal korku veya ürkeklik-çocuğun davranışı hem durum hem de yaşıyla uygundur.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal korku veya ürkeklik-aynı yaştaki bir çocuğun benzer ortamda gösterdiği tepkiyle karşılaştırıldığında, çocuk çok az korku ve ürkekliği sık gösterir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal korku veya ürkeklik- aynı yaştaki bir çocuğun benzer ortamda gösterdiği tepkiyle karşılaştırıldığında, çocuk oldukça çok az veya çok fazla korku ve ürkekliği sık gösterir.'],
                    ['answer' => 4, 'score' => 4, 'description' => '4	Aşırı derecede anormal korku veya ürkeklik- aynı yaştaki bir çocuğun benzer ortamda gösterdiği tepkiyle karşılaştırıldığında, çocuk oldukça çok az veya çok fazla korku ve ürkekliği sık gösterir. 94'],
                ],
            ],
            [
                'title' => 'SÖZEL İLETİŞİM',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Yaş ve duruma uygun normal sözel iletişim'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal sözel iletişim- konuşma bütünüyle geridir. Konuşmanın çoğu anlamlıdır; bazen ekolali veya zamiri ters kullanma olabilir. Nadiren bazı tuhaf kelimeler veya jargon kullanabilir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal sözel iletişim- konuşma olmayabilir. Var olduğunda, sözel iletişimde bazı anlamlı konuşma içinde jargon, ekolali veya zamirin ters kullanımı gibi tuhaf konuşması olabilir. Anlamlı konuşmadaki tuhaflıklar aşırı soru sorma veya özel bir konu ile aşırı uğraşmayı da içerir.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'İleri derecede anormal sözel iletişim- anlamlı konuşması olmaz. Çocuk bebeksi sesler, tuhaf veya hayvansı sesler, konuşmayı andıran karmaşık sesler çıkarabilir veya bazı anlaşılan kelimelerin veya cümleciklerin ısrarlı bizar kullanımı olabilir.'],
                ],
            ],
            [
                'title' => 'SÖZEL OLMAYAN İLETİŞİM',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Yaş ve duruma uygun normal sözel olmayan iletişim'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal sözel olmayan iletişim kullanma-sözel olmayan iletişimin immatur kullanımı çocuğun istediği şeye işaret eden jestlerde yalnızca belirsizlik olabilir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal sözel olmayan iletişim kullanma-çocuk gereksinim veya arzularını nonverbal olarak belirtememektedir ve diğerlerinin sözel olmayan iletişimlerini anlayamamaktadır.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'İleri derecede anormal sözel olmayan iletişim kullanma-çocuk yalnızca açık anlamı olmayan bizar veya tuhaf jestler kullanır veya başkalarının jestlerinin veya yüz ifadeleri ile ilişkili anlamların farkında değilmiş gibi gözükür.'],
                ],
            ],
            [
                'title' => 'ETKİNLİK DÜZEYİ',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Yaşam ve şartlara uygun normal etkinlik düzeyi-çocuk benzer 95 durumdaki aynı yaş normal çocuğa göre çok veya az etkin değildir.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal etkinlik düzeyi-çocuk hafif derecede hareketli veya biraz tembel olabilir ve çoğu zaman yavaş hareket eder. Çocuğun etkinlik düzeyi onun performansının hafif derecede etkiler.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal etkinlik düzeyi-çocuk çok aktif ve kısıtlanması güç olabilir. Sınırsız bir enerjiye sahip olabilir ve gece kolayca uyumaya gitmeyebilir. Tersi olarak çocuk oldukça uyuşuk olabilir ve onu hareket ettirmek için sürekli çaba gerekir.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'İleri derecede anormal etkinlik düzeyi- çocuk aşırı aktivite ya da aşırı inaktivite gösterir ve bir uçtan diğer uça kaymalar gösterebilir.'],
                ],
            ],
            [
                'title' => 'ENTELLEKTÜEL YANITIN DÜZEYI VE UYGUNLUĞU',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Normal ve pek çok alanda uygun tutarlılık gösteren zekâ: Çocuk aynı yaştaki tipik çocuklar kadar zekidir ve olağandışı zihinsel becerileri ya da problemleri yoktur.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif derecede anormal zihinsel işlevsellik: Çocuk aynı yaştaki tipik bir çocuk kadar zeki değildir, yaklaşık tüm alanlarda beceriler aynı düzeyde gerilik gösterir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede anormal zihinsel işlevsellik: Çocuk genel olarak aynı yaştaki tipik bir çocuk kadar zeki değildir, ancak bir ya da daha fazla alanda normale yakın işlevsellik gösterebilir.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Ağır derecede anormal zihinsel işlevsellik: çocuk aynı yaştaki tipik bir çocuk kadar zeki değilken, zihinsel gelişimim bir ya da daha fazla alanında normal bir çocuktan bile daha iyi işlev gösterebilir. 96'],
                ],
            ],
            [
                'title' => 'GENEL İZLENİMLER',
                'answers' => [
                    ['answer' => 1, 'score' => 1, 'description' => 'Otizm yok: Çocuk otizme ait belirtilerin hiçbirini göstermez.'],
                    ['answer' => 2, 'score' => 2, 'description' => 'Hafif otizm: çocuk yalnızca az sayıda ya da yalnızca hafif derecede otizm belirtileri gösterir.'],
                    ['answer' => 3, 'score' => 3, 'description' => 'Orta derecede otizm: çocuk belirli sayıda ya da orta derecede otizm belirtileri gösterir.'],
                    ['answer' => 4, 'score' => 4, 'description' => 'Ağır otizm: Çocuk otizm belirtilerinden çoğunu ya da ağır derecede otizm gösterir.'],
                ],
            ],
        ];

        foreach ($questions as $index => $question) {
            Question::create([
                'sorting_number' => $index + 1,
                'test_id' => $testId,
                'title' => $question['title'],
                'types' => null,
                'items' => json_encode([
                    [
                        'id' => 1,
                        'answer' => $question['answers'][0]['answer'],
                        'score' => $question['answers'][0]['score'],
                        'description' => $question['answers'][0]['description'],
                    ],
                    [
                        'id' => 2,
                        'answer' => 1.5,
                        'score' => 1.5,
                        'description' => '(Bu puanlar arasında ise)',
                    ],
                    [
                        'id' => 3,
                        'answer' => $question['answers'][1]['answer'],
                        'score' => $question['answers'][1]['score'],
                        'description' => $question['answers'][1]['description'],
                    ],
                    [
                        'id' => 4,
                        'answer' => 2.5,
                        'score' => 2.5,
                        'description' => '(Bu puanlar arasında ise)',
                    ],
                    [
                        'id' => 5,
                        'answer' => $question['answers'][2]['answer'],
                        'score' => $question['answers'][2]['score'],
                        'description' => $question['answers'][2]['description'],
                    ],
                    [
                        'id' => 6,
                        'answer' => 3.5,
                        'score' => 3.5,
                        'description' => '(Bu puanlar arasında ise)',
                    ],
                    [
                        'id' => 7,
                        'answer' => $question['answers'][3]['answer'],
                        'score' => $question['answers'][3]['score'],
                        'description' => $question['answers'][3]['description'],
                    ],
                ])
            ]);
        }
    }
}
