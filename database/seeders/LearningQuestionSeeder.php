<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testId = Test::where('slug', 'learning')->first()->test_id;

        $options = [
            ['id' => 1, 'answer' => 'Hiçbir Zaman', 'score' => 1],
            ['id' => 2, 'answer' => 'Bazen', 'score' => 2],
            ['id' => 3, 'answer' => 'Sıklıkla', 'score' => 3],
            ['id' => 4, 'answer' => 'Her Zaman', 'score' => 4]
        ];

        $questions = [
            ['type' => 'AKADEMİK BAŞARI', 'title' => 'Bir çok alanda zeki görünmesine karşın okul başarısı düşüktür.'],
            ['type' => 'AKADEMİK BAŞARI', 'title' => 'Başarı durumu günden güne hatta saatten saate değişiklik gösterir.'],
            ['type' => 'AKADEMİK BAŞARI', 'title' => 'Bazı ders/alanlarda başarısı normal hatta normalin üstünde iken,bazı ders/alanlarda düşüktür.'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Okuması yaşıtları seviyesinin altındadır.'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Okumayı sevmez.'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Yaşıtlarından daha yavaş okur.'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Bazı harflerin seslerini öğrenemez[harfin şekli ile sesini birleştiremez]'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Sessiz yada sesli okurken kelimeleri parmağıyla izler.'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Sınıf düzeyinde bir parça okurken satır,kelime yada harf atlar yada tekrar okur.'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Okurken anlamı bozacak kelimeleri parçadakilerin yerine koyar.[ne zaman yerine,nerede gibi]'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Kelimeleri hecelerken yada harflerine ayırırken  zorlanır.'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Sınıf düzeyinde bir parçayı okuduğunda anlamakta zorlanır[eğer başka birisi okursa daha iyi anlar.]'],
            ['type' => 'OKUMA BECERİSİ', 'title' => 'Okurken bazı harf yada sayıları karıştırır,ters okur[b-d,b-p,6-9 vb.)'],
            ['type' => 'GÖRSEL ALGI', 'title' => 'Gördüğü şeyleri aklında tutmakta zorlanır.(görsel belleği zayıftır.'],
            ['type' => 'GÖRSEL ALGI', 'title' => 'Nesnelerin boyutlarını,şekillerini,uzaklıklarını kavrayamaz(uzaklık,derinlik,boyut algısı zayıftır.)'],
            ['type' => 'GÖRSEL ALGI', 'title' => 'Eşyaları,resimleri,şekilleri eşleştirmekte güçlük çeker,belirli bir şeklin benzerini bulmakta zorlanır.'],
            ['type' => 'İŞİTSEL ALGI', 'title' => 'Bazı harf,sayı ve kelimeleri yanlış duyar,karıştırır(m-n,f-v,b-m,kaş-koş,soba-sopa,bavul-davul gibi)'],
            ['type' => 'İŞİTSEL ALGI', 'title' => 'Sözle verilen yönergeleri anlamakta güçlük çeker(ne söylediğini anlamaz)'],
            ['type' => 'İŞİTSEL ALGI', 'title' => 'Söyleneni dinliyormuş gibi görünür(başkaları söyleneni yapmaya başladığı halde o yönergelerin tekrarlanmasını ister)'],
            ['type' => 'İŞİTSEL ALGI', 'title' => 'Birkaç şey birden söylendiğinde en az birini unutur[işitsel belleği zayıftır)'],
            ['type' => 'İŞİTSEL ALGI', 'title' => 'Aynı zamanda işittiği 2-3 sesten birini duymaz(müzik dinlerken telefon sesini,kendisine seslenildiğini duymaz)'],
            ['type' => 'YAZMA BECERİSİ', 'title' => 'Yaşıtlarına oranla el yazısı okunaksız ve çirkindir.'],
            ['type' => 'YAZMA BECERİSİ', 'title' => 'Yazı yazmayı sevmez.'],
            ['type' => 'YAZMA BECERİSİ', 'title' => 'Sınıf düzeyine göre yazı yazması yavaştır.'],
            ['type' => 'YAZMA BECERİSİ', 'title' => 'Yazarken bazı harf ve sayıları ters yazar,karıştırır(b-p,m-n,ı-i,2-5,d-t,g-ğ,g-y,gibi)'],
            ['type' => 'YAZMA BECERİSİ', 'title' => 'Yazarken bazı harfleri atlar yada harf ekler.'],
            ['type' => 'YAZMA BECERİSİ', 'title' => 'Sınıf düzeyine göre yazılı imla ve noktalama hataları yapar(küçük harf-büyük harf,noktalama hataları).'],
            ['type' => 'YAZMA BECERİSİ', 'title' => 'Yazarken sayfayı düzenli kullanamaz(gereksiz satır atlar,boşluk bırakır,sayfanın belirli bir kısmını kullanamaz.).'],
            ['type' => 'YAZMA BECERİSİ', 'title' => 'Yaşıtlarına oranla çizgileri kötü,dalgalıdır.'],
            ['type' => 'YAZMA BECERİSİ', 'title' => 'Yaşıtlarına oranla insan resmi çizimleri kötüdür.'],
            ['type' => 'ARİTMETİK BECERİLERİ', 'title' => 'Aritmetikte zorlanır(dört işlemi yaparken yavaştır,parmak sayar,yanlış yapar.)'],
            ['type' => 'ARİTMETİK BECERİLERİ', 'title' => 'Sınıf düzeyine göre çarpım tablosu öğrenmede yaşıtları seviyesinin altındadır.'],
            ['type' => 'ARİTMETİK BECERİLERİ', 'title' => 'Bazı aritmetik sembolleri öğrenmekte zorlanır,karıştırır(+,*,-)'],
            ['type' => 'ÇALIŞMA ALIŞKANLIĞI', 'title' => 'Ev ödevlerini almaz,eksik kalır.'],
            ['type' => 'ÇALIŞMA ALIŞKANLIĞI', 'title' => 'Ev ödevlerini yaparken yavaş ve verimsizdir.'],
            ['type' => 'ÇALIŞMA ALIŞKANLIĞI', 'title' => 'Ders çalışırken sık sık ara verir,çabuk sıkılır.'],
            ['type' => 'ÇALIŞMA ALIŞKANLIĞI', 'title' => 'Ders çalışmayı sevmez.'],
            ['type' => 'ÇALIŞMA ALIŞKANLIĞI', 'title' => 'Ödevlerini yalnız başına yapmaz.'],
            ['type' => 'ORGANİZE OLMA BECERİLERİ', 'title' => 'Odası,çantası ve eşyaları,giysileri dağınıktır.'],
            ['type' => 'ORGANİZE OLMA BECERİLERİ', 'title' => 'Defter,kitaplarını kötü kullanır,yırtar.'],
            ['type' => 'ORGANİZE OLMA BECERİLERİ', 'title' => 'Defter,kalem ve diğer araçlarını kaybeder.'],
            ['type' => 'ORGANİZE OLMA BECERİLERİ', 'title' => 'Zamanını ayarlamakta zorluk çeker(bir işi yaparken ne kadar zaman geçirdiğini tahmin edemez).'],
            ['type' => 'ORGANİZE OLMA BECERİLERİ', 'title' => 'Üzerine aldığı işleri düzenlemekte zorluk çeker,nereden başlayacağını bilemez.'],
            ['type' => 'YÖNELİM BECERİLERİ', 'title' => 'Sağ-sol karıştırır.'],
            ['type' => 'YÖNELİM BECERİLERİ', 'title' => 'Yönünü bulmakta zorlanır[doğu-batı,kuzey-güney,kavramlarını karıştırır).'],
            ['type' => 'YÖNELİM BECERİLERİ', 'title' => 'Burada,şurada,orada gibi işaret sözcüklerini karıştırır.'],
            ['type' => 'YÖNELİM BECERİLERİ', 'title' => 'Alt-üst,ön arka gibi kavramları karıştırır.'],
            ['type' => 'YÖNELİM BECERİLERİ', 'title' => 'Zaman kavramlarını karıştırır.(dün-bugün,önce-sonra gibi).'],
            ['type' => 'YÖNELİM BECERİLERİ', 'title' => 'Yıl,ay,gün,mevsim kavramlarını karıştırır(hangi mevsimdeyiz denilince ocak diye cevap verir).'],
            ['type' => 'YÖNELİM BECERİLERİ', 'title' => 'Saati öğrenmekte zorlanır.'],
            ['type' => 'DOKUNSAL ALGI', 'title' => 'Gözü kapalı iken avucuna çizilen sayı,harfi anlayamaz.'],
            ['type' => 'DOKUNSAL ALGI', 'title' => 'Gözü kapalı iken hangi parmağına dokunulduğunu anlayamaz.'],
            ['type' => 'SIRAYA KOYMA BECERİSİ', 'title' => 'Dinlediği,okuduğu bir öyküyü anlatması istendiğinde öykünün başını sonunu karıştırır.'],
            ['type' => 'SIRAYA KOYMA BECERİSİ', 'title' => 'Haftanın günlerini yada ayları sırayla sayabilir ama karışık sorulduğunda bir sonrakini bilemez.'],
            ['type' => 'SIRAYA KOYMA BECERİSİ', 'title' => 'Okulda öğrendiklerini yada çalıştıklarını çabuk unutur.'],
            ['type' => 'SÖZEL İFADE BECERİSİ', 'title' => 'Duygu ve düşüncelerini sözel olarak ifade etmekte zorlanır'],
            ['type' => 'SÖZEL İFADE BECERİSİ', 'title' => 'Serbest konuşurken düzgün cümleler kuramaz.'],
            ['type' => 'SÖZEL İFADE BECERİSİ', 'title' => 'Kalabalıkta konuşurken heyecanlanır,takılır,şaşırır.'],
            ['type' => 'SÖZEL İFADE BECERİSİ', 'title' => 'Bazı harflerin seslerini doğru olarak telaffuz edemez,(r,ş,j gibi harfleri söyleyemez,yanlış söyler).'],
            ['type' => 'SÖZEL İFADE BECERİSİ', 'title' => 'Konuşması yabancılar tarafından zor anlaşılır.'],
            ['type' => 'MOTOR BECERİLERİ', 'title' => 'Top yakalama,ip atlama gibi işlerde yaşıtları seviyesinin altındadır.'],
            ['type' => 'MOTOR BECERİLERİ', 'title' => 'Sakardır,düşer,yaralanır,istemeden bir şeyler kırar.'],
            ['type' => 'MOTOR BECERİLERİ', 'title' => 'Çatal,kaşık kullanmakta zorlanır.'],
            ['type' => 'MOTOR BECERİLERİ', 'title' => 'Ayakkabı,kravat bağlamayı beceremez.'],
            ['type' => 'MOTOR BECERİLERİ', 'title' => 'El becerilerine dayalı işlerde zorluk çeker(düğme ilikleme,makas kullanma,boncuk dizme gibi).'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Düşünmeden aniden aklına eseni yapar.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'İstedikleri yapılmadığında aşırı tepki gösterir,öfkelenir.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Eleştirildiğinde aşırı tepki gösterir,öfkelenir yada dikkate almaz(eleştiriye toleransı azdır).'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Daha çok yalnız olmayı tercih eder,fazla arkadaşı yoktur.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Arkadaş ilişkileri iyi değildir.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Yaşıtları yerine daha çok yetişkinlerle yada kendinden küçüklerle birlikte olmaktan keyif alır.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Hayal kurar,dalgındır,sınıfta uyur.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Yaşıtlarına oranla sınıf yada okul kurallarına uymakta zorluk çeker.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Değişikliklere zor uyum sağlar.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Duygu durumu çok sık değişir.(neşeli iken aniden öfkelenebilir.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Kendisine güveni azdır.'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Gergin yada huzursuzdur(dudaklarını ısırır,sık tuvalete gider,saçıyla oynar).'],
            ['type' => 'SOSYAL-DUYGUSAL DAVRANIŞLAR', 'title' => 'Kendisini fiziksel olarak beğenmez.'],
            ['type' => 'HAREKETLİLİK', 'title' => 'Hızlı hareket eder,hızlı konuşur.'],
            ['type' => 'HAREKETLİLİK', 'title' => 'Aşırı hareketlidir.(eli ayağı oynar,kıpırdanır,mırıldanır).'],
            ['type' => 'HAREKETLİLİK', 'title' => 'Uzun süre yerinde duramaz.'],
            ['type' => 'DİKKAT BECERİLERİ', 'title' => 'Yoğun görsel dikkat gerektiren işlerden kaçınır.'],
            ['type' => 'DİKKAT BECERİLERİ', 'title' => 'Dikkatini ayrıntılara veremez,dikkatsizce hatalar yapar.'],
            ['type' => 'DİKKAT BECERİLERİ', 'title' => 'Dikkati kolayca dağılır(başkasının sesinden,hareketinden dahi dikkati dağılır).'],
            ['type' => 'DİKKAT BECERİLERİ', 'title' => 'İşlerini bitirmede yavaştır,oyalanır,nadiren başladığı işi bitirir.'],
            ['type' => 'MOTİVASYON', 'title' => 'Başarılı olamadığı zaman çok çabuk vazgeçer.'],
            ['type' => 'MOTİVASYON', 'title' => 'Okulla ilgili yada başka faaliyetlere katılmak istemez'],
            ['type' => 'MOTİVASYON', 'title' => 'Okulda hevessizdir.Çok az çaba gösterir.'],
        ];

        foreach ($questions as $index => $question) {
            Question::create([
                'sorting_number' => $index + 1,
                'test_id' => $testId,
                'title' => $question['title'],
                'types' => json_encode(['id' => 1, 'name' => $question['type']]),
                'items' => json_encode($options)
            ]);
        }
    }
}
