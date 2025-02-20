<?php

namespace Database\Seeders;


use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistoryQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testId = Test::where('slug', 'history')->first()->test_id;

        $questions = [
            "Formu dolduran kişinin ismi",
            "Formu dolduran kişinin yakınlık derecesi (Anne, Baba vb.)",
            "Bu programı nereden öğrendiniz?",
            "Baba Ad Soyad",
            "Baba Doğum Tarihi",
            "Baba Eğitim Durumu",
            "Baba Meslek",
            "Anne Ad Soyad",
            "Anne Doğum Tarihi",
            "Anne Eğitim Durumu",
            "Anne Meslek",
            "Anne Baba arasında akrabalık var mı? Evet ise derecesini belirtiniz",
            "Ebeveynlerin şuanki medeni durumu? (Evli, Ayrı, Boşanmış, Diğer)",
            "Evliliğinizin şu an istikrarlı ve olumlu mu? Geçmişte herhangi bir ayrılık meydana geldi mi?",
            "Çocuğunuza belirli bir hastalık ya da rahatsızlık teşhisi konuldu mu?",
            "Biyolojik anne babanın yakınlarında da aynı rahatsızlığın belirtileri görülebilir mi?",
            "Çocuğunuz özel bir tedavi ya da terapi ile yardım aldı mı?",
            "Çocuğun zorluklarının başlangıcında ya da çocuğun gelişimi süresince özel olay ya da travma meydana geldi mi?",
            "Çocuğunuzun akranlarıyla sosyal uyumunu nasıl tanımlarsınız? ",
            "Çocuğunuzun yetişkinlerle sosyal uyumunu nasıl tanımlarsınız?",
            "Çocuğunuzun kendinden küçüklerle sosyal uyumunu nasıl tanımlarsınız?",
            "Çocuğunuzun dikkati nasıl?",
            "Başladığı bir işi tamamlar mı?",
            "Adına tepki verir mi?",
            "Göz teması kurar mı?",
            "Bir şey istediği zaman ne yapar? Sizi götürür mü işaret mi eder ses mi çıkarır?",
            "Alıcı dili nasıl (sizi anlaması nasıl)?",
            "İfade edici dili nasıl? Konuşması, ses çıkarması, anlamsız konuşması var mı?",
            "Anlama ve algılama becerisi nasıl? Kelime yapısı uzadıkça anlamakta zorlanır mı veya hemen kavrar mı?",
            "Dengesi nasıl ( denge tahtasında yürümek gibi)?",
            "Kaba motoru nasıl (hoplama, zıplama, koşma, tırmanma, takla atma, bisiklete binme)?",
            "İnce motoru nasıl (el göz koordinasyonu, ipe boncuk dizme, kaşık çatal tutma)?",
            "Davranışı nasıl? (İstediği bir şey olmadığında vurma, ısırma, cimcikleme, saç çekme, tükürme, kendisine veya başkasına uygular mı)?",
            "Duyusal işlemleme süreci nasıl?",
            "Her şeyi ağzına götürür mü?",
            "Koklar mı?",
            "Parmak ucunda yürür mü?",
            "Kendi etrafında döner mi?",
            "Yüksek sesten rahatsız olur mu?",
            "Her yüzeye dokunur mu?",
            "Sıcak soğuk ayırt eder mi?",
            "Yemesi nasıl? Yemek seçer mi?",
            "Uykular düzenli mi?",
            "Hiperaktivite var mı?",
            "Takıntılı davranışları var mı?",
            "Hamilelik sırasında herhangi bir komplikasyon var mıydı? (Şok, Duygusal Stres, Sevilen kaybı/ölüm, Kaza, Sağlık problemi, Yorgunluk, yatağa bağımlı kalma vb.)",
            "Doğum sırasında herhangi bir komplikasyon oluştu mu? (doğumun uzun sürmesi, anormal doğum pozisyonu, Forsepsli/Aletle doğum, sezeryan doğum, doğum kilosu, gerekli oksijen, küvez, sarılık ya da diğer sağlık problemleri)",
            "Doğumdan sonra, çocuğunuzun yaşamının ilk iki yılında, herhangi bir emzirme, dışarıdan beslenme, uyuma, özel sağlık problemleri, parmak emme, enerji düzeyinde vb. karşılaştığı zorluklar konusunda yorumlarınız neler olabilir?",
            "Ebeveynden uzun süre ayrı kalma durumu var mıydı? Eğer evetse ne zaman ve ne kadar süre için ayrı kaldı?",
            "Çocuğunuzun duyusal-motor gelişimini nasıl tanımlarsınız? (Normal, Gelişmiş, İleri Düzey - Yaşa bağlı olarak değişir, örneğin bebeklikte göz teması, sesin yönüne bakma, yakınlarını tanıma ve tepki verme, nesne takip etme ve düştüğü yere bakma, oyuncak tutup sallama vb.)",
            "Motor gelişimine ilişkin herhangi bir zorluk ya da tuhaflık anlatır mısınız? (Bir nesneyi tutma, kavrama veya kaşığı ağzına götürebilme gibi)",
            "Tuvalet eğitiminde sıkıntı oluştu mu?",
            "Kaç yaşında emekledi?",
            "Kaç yaşında yürüdü?",
            "Kaç yaşında sağ el veya sol elini aktif olarak kullanmaya başladı?",
            "Sallayarak uyumaktan ya da sallanmaktan korkuyor muydu? Yoksa tam tersi aşırı heyecan ve uyarılmaktan mı hoşlanır?",
            "Tırnak ya da saç kesmekten, diş fırçalamaktan ya da dokunulup sarılmaktan hoşlanmadığı oluyor muydu?",
            "Çocuğunuzun konuşma ve dil gelişimini nasıl tanımlarsınız? (Normal, Gelişmiş, İleri Düzey)",
            "Konuşma ya da dil edinimine ilişkin zorluk ya da tuhaflık anlatır mısınız?",
            "Göz teması kurma, görüş alanı veya görme ile ilgili sorun yaşadı mı?",
            "İki yaşından bu yana çocuğunuzun sağlığını nasıl tanımlarsınız? (Astım, Bronşit, Cilt problemi, Gastro-bağırsak problemi, Çarpıntı, Epilepsi, Ameliyat, Yaralanma, Başağrısı, Kabus, Düzensiz uyku, Yatak ıslatma, Tırmak yeme, Diş gıcırdatma, Horlama)",
            "Alerji ya da gıda/çevre hassaslığına meyilli mi?",
            "Özel bir beslenme şekli (diyet) uyguluyor mu?",
            "Herhangi bir gıda bağımlılığı var mı? Evet ise... Ne zamandır ve ne tür? ",
            "Çocuğunuzun ağrı eşiği nasıldır? (Düştüğünde hemen ağlamaz, ağlarsa canı gerçekten çok yanmış demektir ise ağrı eşiği yüksektir vb.)",
            "Şu an genel sağlık durumu iyi mi?",
            "Doktor tavsiyesiyle bir ilaç kullanıyor mu? Evet ise... Ne zamandır?",
            "Eğer gittiyse, çocuğunuz kaç yaşında kreşe gitmeye başladı?",
            "(Okul) Ayrılığın ilk günlerinde çocuğunuzun adaptasyon süreci nasıldı? (Çoğunlukla Olumlu, Karışık, Çoğunlukla Olumsuz)",
            "Okula başladığı ilk dönemlerde çocuğunuzun kişisel, sosyal ve akademik zorlukları konusunda bilgi veriniz.",
            "Çocuğunuzun okula karşı ilgisini, motivasyonunu ve tutumunu nasıl tanımlıyorsunuz?",
            "Çocuğunuz Özel Eğitim sisteminden yardım aldı mı?",
            "Çocuğunuzun okuldaki yerleştirilme ve seviyesinden memnun musunuz?",
            "Çocuğunuzu nasıl tanımlarsınız? Güçlü yönleri nelerdir?",
            "Çocuğunuzu nasıl tanımlarsınız? Zayıf yönleri nelerdir?"
        ];

        foreach ($questions as $index => $question) {
            Question::create([
                'sorting_number' => $index + 1,
                'test_id' => $testId,
                'title' => $question,
                'types' => null,
                'items' => null,
            ]);
        }
    }
}
