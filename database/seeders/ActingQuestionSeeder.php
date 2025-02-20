<?php

namespace Database\Seeders;


use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActingQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testId = Test::where('slug', 'acting')->first()->test_id;
        $options = [
            ['id' => 1, 'answer' => 'Böyle bir sorun yok', 'score' => 0],
            ['id' => 2, 'answer' => 'Var, ama rahatsız edici düzeyde değil', 'score' => 1],
            ['id' => 3, 'answer' => 'Rahatsız edici', 'score' => 2],
            ['id' => 4, 'answer' => 'Çok rahatsız edici', 'score' => 3]
        ];

        $questions = [
            "Evde, okulda, işte ya da başka yerlerde aşırı derecede hareketlidir.",
            "Amaçlı olarak kendine zarar verir.",
            "Halsiz, tembel, hareketsizdir.",
            "Diğer çocuklara ve büyüklere karşı saldırgandır (sözel ya da fiziksel olarak).",
            "Başkalarından uzak durmaya/yalnız kalmaya çalışır.",
            "Amaca yönelik olmayan, tekrarlayıcı vücut hareketleri vardır.",
            "Gürültülü sesler çıkarır (uygunsuz bir şekilde yüksek sesli ve inişli-çıkışlı).",
            "Uygunsuz bir şekilde çığlık atar.",
            "Çok fazla konuşur.",
            "Öfke patlamaları olur.",
            "Basmakalıp davranışları; anormal, tekrarlayıcı hareketleri vardır.",
            "Zihni aşırı meşguldür; boşluğa uzun uzun bakar/dalar.",
            "Dürtüseldir (düşünmeden hareket eder).",
            "Çabucak öfkelenir ve mızmızdır.",
            "Huzursuzdur, yerinde duramaz.",
            "İnsanlardan uzaktır, yalnız yapılan etkinlikleri tercih eder.",
            "Garip, tuhaf davranışları vardır.",
            "İtaatsiz, asidir; kontrol edilmesi zordur.",
            "Uygunsuz zamanlarda haykırışları/bağırmaları olur.",
            "Sabit/ değişmez bir yüz ifadesi vardır;duygusal anlamlılık içermez.",
            "Başkalarını rahatsız eder.",
            "Tekrarlayıcı konuşmaları vardır.",
            "Hiçbir şey yapmadan oturup başkalarını izler.",
            "İşbirliğinde bulunmaz.",
            "Keyfi bozuktur; moralsizdir.",
            "Herhangi bir fiziksel temasa karşı direnç gösterir.",
            "Tekrar tekrar başını ileri geri hareket ettirir.",
            "Komutlara dikkat etmez / komutları umursamaz.",
            "İhtiyaçları hemen yerine getirilmelidir.",
            "Kendini diğer çocuklardan ya da erişkinlerden izole eder.",
            "Grup etkinliklerini bozar.",
            "Belli bir pozisyonda uzun bir süre durur ya da oturur.",
            "Kendi kendine yüksek sesle konuşur.",
            "Küçük bir sıkıntıda hemen incinir ve ağlar.",
            "Tekrarlayıcı el, vücut ve kafa hareketleri vardır.",
            "Keyfi / morali çabucak değişir.",
            "Kuralları olan etkinliklerde ilgisizdir (tepki vermez).",
            "Yerinde duramaz (örn: ders sırasında ya da eğitimde, yemek esnasında).",
            "Belli bir süre dahi hareketsiz kalamaz.",
            "Ona yaklaşmak, onunla ilişki kurmak ya da onu anlamak zordur.",
            "Uygunsuz bir şekilde bağırır.",
            "Yalnız kalmayı tercih eder.",
            "Kelime veya vücut hareketleriyle iletişim kurma çabası göstermez.",
            "Kolaylıkla dikkati çelinebilir.",
            "Kollarını, bacaklarını tekrar tekrar sallar veya oynatır.",
            "Bellir bir kelime ya da tümceyi tekrar tekrar söyler.",
            "Eşyalara tekme atar, vurur ya da kapıları çarpar.",
            "Sürekli olarak odanın içinde koşar veya zıplar.",
            "Vücudunu ileri-geri durmadan sallar.",
            "Bile bile kendine zarar verir / kendini yaralar.",
            "Kendine herhangi bir şey söylenildiğinde hiç dikkate almaz.",
            "Kendi kendine fiziksel şiddet uygular.",
            "Hareketsizdir, asla kendiğilinden hareket etmez.",
            "Aşırı derecede hareketli olmaya meyillidir.",
            "Sevilmeye / ilgilenmeye karşı ters tepkiler verir.",
            "Bile bile komutlara uymaz.",
            "İstedikleri engellendiğinde öfke patlamaları yaşar.",
            "Başkalarına kısıtlı sosyal karşılıklar verir."
        ];

        foreach ($questions as $index => $question) {
            Question::create([
                'sorting_number' => $index + 1,
                'test_id' => $testId,
                'title' => $question,
                'types' => null,
                'items' => json_encode($options)
            ]);
        }
    }
}
