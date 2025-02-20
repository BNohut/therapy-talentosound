<?php

namespace App\SMS;


class sms
{

    private $username;
    private $password;
    private $header;
    public function __construct()
    {
        if (isset($_ENV['NETGSM_USERCODE'])) {
            $this->username = $_ENV['NETGSM_USERCODE'];
        } else {
            $this->username = 'x';
        }
        if (isset($_ENV['NETGSM_PASSWORD'])) {
            $this->password = $_ENV['NETGSM_PASSWORD'];
        } else {
            $this->password = 'x';
        }
        if (isset($_ENV['NETGSM_HEADER'])) {
            $this->header = $_ENV['NETGSM_HEADER'];
        } else {
            $this->header = 'x';
        }
    }

    public function send($data): array
    {
        if (!isset($data['message'])) {

            $response["status"] = "false";
            $response["message"] = "Mesaj giriniz";
            return $response;
        }

        if (!isset($data['no'])) {
            $response["status"] = "false";
            $response["message"] = 'Numara giriniz';
            return $response;
        }
        if (!isset($data['header'])) {
            $header = $this->header;
        } else {
            $header = $data['header'];
        }
        if (empty($header)) {
            $response['status'] = 'false';
            $response['message'] = 'Header bilgisini kontrol ediniz.';
            return $response;
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://soap.netgsm.com.tr:8080/Sms_webservis/SMS?wsdl/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '<?xml version="1.0"?>
                <SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                            xmlns:xsd="http://www.w3.org/2001/XMLSchema"
                xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
                    <SOAP-ENV:Body>
                        <ns3:smsGonder1NV2 xmlns:ns3="http://sms/">
                            <username>' . $this->username . '</username>
                            <password>' . $this->password . '</password>
                            <header>' . $this->header . '</header>
                            <msg>' . $data['message'] . '</msg>
                            <gsm>' . $data['no'] . '</gsm>
                            <filter>0</filter>
                            <encoding>TR</encoding>
                        </ns3:smsGonder1NV2>
                    </SOAP-ENV:Body>
                </SOAP-ENV:Envelope>',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/xml'
            ),
        ));

        $result = curl_exec($curl);

        curl_close($curl);

        $resultMessages = array(
            20 => 'Mesaj metni ya da mesaj boyunu kontrol ediniz. Max:917 karakter.',
            30 => 'Geçersiz kullanıcı adı , şifre veya kullanıcınızın API erişim izninin olmadığını gösterir.Ayrıca eğer API erişiminizde IP sınırlaması yaptıysanız ve sınırladığınız ip dışında gönderim sağlıyorsanız 30 hata kodunu alırsınız. API erişim izninizi veya IP sınırlamanızı , web arayüzden; sağ üst köşede bulunan ayarlar> API işlemleri menüsunden kontrol edebilirsiniz.',
            40 => 'Gönderici adınızı (mesaj başlığınızı) kontrol ediniz.',
            41 => 'Gönderici adınızı  (mesaj başlığınızı) kontrol ediniz.',
            50 => 'Abone hesabınız ile İYS kontrollü gönderimler yapılamamaktadır.',
            51 => 'Aboneliğinize tanımlı İYS Marka bilgisi bulunamadı.',
            70 => 'Input parametrelerini kontrol ediniz.',
            80 => 'Gönderim sınır aşımı.(dakikada 100 adet gönderim yapılabilir.)',
            85 => 'Mükerrer Gönderim sınır aşımı. Aynı numaraya 1 dakika içerisinde 20\'den fazla görev oluşturulamaz.',
            100 => 'Sistem hatası.',
            101 => 'Sistem hatası.',
        );

        $responseXML = simplexml_load_string($result);
        $code = json_decode($responseXML->xpath('//return')[0], true);

        if ($code == 20 || $code == 30 || $code == 40 || $code == 41 || $code == 50 || $code == 51 || $code == 70 || $code == 80 || $code == 85 || $code == 100 || $code == 101) {
            $response["status"] = "false";
            $response["code"] = $code;
            $response["message"] = $resultMessages[$code];
        } else {
            $response["status"] = 'true';
            $response["code"] = $code;
            $response["message"] = 'Mesaj gönderildi.';
        }
        return $response;
    }
}
