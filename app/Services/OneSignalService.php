<?php

namespace App\Services;

use DateTime;
use onesignal\client\api\DefaultApi;
use onesignal\client\Configuration;
use onesignal\client\model\GetNotificationRequestBody;
use onesignal\client\model\Notification;
use onesignal\client\model\StringMap;
use onesignal\client\model\Player;
use onesignal\client\model\UpdatePlayerTagsRequestBody;
use onesignal\client\model\ExportPlayersRequestBody;
use onesignal\client\model\Segment;
use onesignal\client\model\FilterExpressions;
use PHPUnit\Framework\TestCase;
use GuzzleHttp;

class OneSignalService
{
    private $apiInstance;

    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration()
            ->setAppKeyToken(env('ONESIGNAL_APP_KEY_TOKEN'))
            ->setUserKeyToken(env('ONESIGNAL_USER_KEY_TOKEN'));

        $this->apiInstance = new DefaultApi(
            new GuzzleHttp\Client(),
            $config
        );
    }

    function createEmailNotification($subject, $message, $to, $userEmail, $userName, $userPhone): Notification
    {
        $notification = new Notification();
        $notification->setAppId(env('ONESIGNAL_APP_ID'));
        $notification->setEmailSubject($subject);
        if ($userEmail || $userPhone) {
            $notification->setEmailBody(
                '<p><span style="font-size:16px">Başlık:<strong>' . $subject . '</strong></span></p>

                <p><em>Mesaj:' . $message .
                    '</em></p>
                <br>
                <br>
                <p><em>İsim: ' . $userName . '</em></p>
                <p><em>Email:' . $userEmail . '</em></p>
                <p><em>Telefon:' . $userPhone . '</em></p>

                <p>&nbsp;</p>

                <p>TalentoSound&nbsp;&copy;</p>

                <p>All rights reserved.<span style="display:none">&nbsp;</span></p>

                <br>
                <br>
                <a href="https://www.talentosound.com.tr" name="unsubscribe_url">Unsubscribe</a>'
            );
        } else {
            $notification->setEmailBody(
                '<p style="text-align:center"><img alt="TalentoSound Logo" src="https://www.talentosound.com.tr/ts-title-logo.png" style="float:left; height:200px; width:150px" /></p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p><span style="font-size:16px"><strong>' . $subject . '</strong></span></p>

                <p><em>' . $message . '</em></p>

                <p>&nbsp;</p>

                <p>TalentoSound&nbsp;&copy;</p>

                <p>All rights reserved.<span style="display:none">&nbsp;</span></p>

                <br>
                <br>
                <a href="https://www.talentosound.com.tr" name="unsubscribe_url">Unsubscribe</a>'
            );
        }
        $notification->setIncludeEmailTokens([$to]);

        return $notification;
    }

    function sendEmail($subject, $message, $to, $userEmail = null, $userName = null, $userPhone = null)
    {
        $emailNotification = $this->createEmailNotification($subject, $message, $to, $userEmail, $userName, $userPhone);

        return $this->apiInstance->createNotification($emailNotification);
    }

    function getPlayers()
    {
        $limit = 10;
        $getPlayersResult = $this->apiInstance->getPlayers(env('ONESIGNAL_APP_ID'), $limit);
        return $getPlayersResult->getPlayers();
    }

    function createResetPasswordEmailNotification($subject, $message, $token, $userId, $to): Notification
    {
        $FRONT_URL = env('FRONT_URL');
        $notification = new Notification();
        $notification->setAppId(env('ONESIGNAL_APP_ID'));
        $notification->setEmailSubject($subject);
        $notification->setEmailBody(
            '<p style="text-align:center"><img alt="TalentoSound Logo" src="https://www.talentosound.com.tr/ts-title-logo.png" style="float:left; height:100px; width:156px" /></p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p><span style="font-size:16px"><strong>' . $subject . '</strong></span></p>

            <p><em>' . $message . '</em></p> ' .

                '<p>   
                <a href="' . $FRONT_URL . '/auth/reset-password/' . $token . '/' . $userId . '">
                    Parolamı sıfırla
                </a>
            </p>'

                . ' <p>&nbsp;</p>
            <p>TalentoSound&nbsp;&copy;</p>

            <p>All rights reserved.<span style="display:none">&nbsp;</span></p>

            <br>
            <br>
            <a href="https://www.talentosound.com.tr" name="unsubscribe_url">Unsubscribe</a>'
        );
        $notification->setIncludeEmailTokens([$to]);

        return $notification;
    }

    function sendResetPasswordEmail($subject, $message, $token, $userId, $to)
    {
        $resetPasswordEmailNotification = $this->createResetPasswordEmailNotification($subject, $message, $token, $userId, $to);

        return $this->apiInstance->createNotification($resetPasswordEmailNotification);
    }

    function createAppointmentRequestNotificationForSpecialist($data)
    {
        $notification = new Notification();
        $notification->setAppId(env('ONESIGNAL_APP_ID'));
        $notification->setEmailSubject($data['title']);
        $sessionType = $data['session_type'] == 'online' ? 'Online' : 'Yüz Yüze';
        $notification->setEmailBody(
            '<p><span style="font-size:16px"><strong>' . $data['title'] . '</strong></span></p>

                <p><em>' . $data['mail_message'] .
                '</em></p>
                <br>
                <br>
                <p><em>İsim: ' . $data['fullname'] . '</em></p>
                <p><em>Email: ' . $data['email'] . '</em></p>
                <p><em>Telefon: ' . $data['phone'] . '</em></p>
                <p><em>Mesaj: ' . $data['message'] . '</em></p>
                <p><em>Seans Türü: ' . $sessionType . '</em></p>
                <p><em>Tarih: ' . $data['date'] . '</em></p>
                <p><em>Saat: ' . $data['hour'] . '</em></p>

                <p>&nbsp;</p>

                <p>TalentoSound&nbsp;&copy;</p>

                <p>All rights reserved.<span style="display:none">&nbsp;</span></p>

                <br>
                <br>
                <a href="https://www.talentosound.com.tr" name="unsubscribe_url">Unsubscribe</a>'
        );

        $notification->setIncludeEmailTokens([$data['specialist_email']]);

        return $notification;
    }

    function sendAppointmentRequestMailToSpecialist($data)
    {
        $appointmentRequestNotification = $this->createAppointmentRequestNotificationForSpecialist($data);

        return $this->apiInstance->createNotification($appointmentRequestNotification);
    }

    function createAppointmentRequestNotificationForRequester($data)
    {
        $notification = new Notification();
        $notification->setAppId(env('ONESIGNAL_APP_ID'));
        $notification->setEmailSubject('Randevu Talebiniz Alındı');
        $sessionType = $data['session_type'] == 'online' ? 'Online' : 'Yüz Yüze';
        $notification->setEmailBody(
            '<p><span style="font-size:16px"><strong>Randevu Talebiniz Alındı</strong></span></p>

                <p><em>' . 'Merhaba, randevu talebiniz uzmana iletildi. Lütfen size geri dönüş yapmasını bekleyiniz.' .
                '</em></p>
                <br>
                <br>
                <p><em>İsim: ' . $data['fullname'] . '</em></p>
                <p><em>Email: ' . $data['email'] . '</em></p>
                <p><em>Telefon: ' . $data['phone'] . '</em></p>
                <p><em>Mesajınız: ' . $data['message'] . '</em></p>
                <p><em>Seans Türü: ' . $sessionType . '</em></p>
                <p><em>Tarih: ' . $data['date'] . '</em></p>
                <p><em>Saat: ' . $data['hour'] . '</em></p>

                <p>&nbsp;</p>

                <p>TalentoSound&nbsp;&copy;</p>

                <p>All rights reserved.<span style="display:none">&nbsp;</span></p>

                <br>
                <br>
                <a href="https://www.talentosound.com.tr" name="unsubscribe_url">Unsubscribe</a>'
        );

        $notification->setIncludeEmailTokens([$data['email']]);

        return $notification;
    }

    function sendAppointmentRequestMailToRequester($data)
    {
        $appointmentRequestNotification = $this->createAppointmentRequestNotificationForRequester($data);

        return $this->apiInstance->createNotification($appointmentRequestNotification);
    }
}
