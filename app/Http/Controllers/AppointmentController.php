<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SystemNotification;
use App\Services\OneSignalService;
use App\Services\TwilioSMSService;
use App\SMS\sms;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function makeRequest(Request $request)
    {
        try {

            $specialist = User::where('user_id', $request->expert_id)->first();
            if (!$specialist) {
                return response([
                    'status' => 'error',
                    'message' => 'Specialist not found',
                ], 404);
            }
            $data = [
                'title' => 'Randevu Talebi',
                'mail_message' => 'Yeni bir randevu talebi alındı. Detaylar aşağıda belirtilmiştir.',
                'specialist_email' => $specialist->email,
                'date' => $request->date,
                'session_type' => $request->session_type,
                'hour' => $request->hour,
                'fullname' => $request->fullname,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
            ];

            $oneSignal = new OneSignalService();
            $oneSignal->sendAppointmentRequestMailToSpecialist($data);
            $oneSignal->sendAppointmentRequestMailToRequester($data);

            if ($specialist->phone) {
                if ($specialist->country_phone_code == '+90') {
                    $phone = $specialist->phone;
                    $this->sendSMSByNetGSM($data, $phone);
                } else {
                    $phone = $specialist->phone;
                    $country_phone_code = $specialist->country_phone_code;
                    $this->sendSMSByTwilio($data, $phone, $country_phone_code);
                }
            }
        } catch (\Exception $err) {
            return response([
                'status' => 'error',
                'message' => $err->getMessage() . ' ' . $err->getLine() . ' ' . $err->getFile(),
            ], 500);
        }
    }

    public function sendSMSByNetGSM($data, $phone)
    {
        $message = "Yeni bir randevu talebi alındı. İsim: " . $data['fullname'] . " Telefon: " . $data['phone'] . " Tarih: " . $data['date'] . " Saati: " . $data['hour'] . " Tür: " . $data['session_type'] == 'online' ? 'Online' : 'Yüz Yüze';
        $sms = new sms();
        $result = $sms->send([
            'message' => $message,
            'no' => $phone,
        ]);
        return $result;
    }

    public function sendSMSByTwilio($data, $phone, $country_phone_code)
    {
        $phoneNumber = $country_phone_code . ' ' . $phone;
        $message = "Yeni bir randevu talebi alındı. İsim: " . $data['fullname'] . " Telefon: " . $data['phone'] . " Tarih: " . $data['date'] . " Saati: " . $data['hour'] . " Tür: " . $data['session_type'] == 'online' ? 'Online' : 'Yüz Yüze';
        $twilio = new TwilioSMSService();
        $result = $twilio->sendSMS($phoneNumber, $message);
        return $result;
    }
}
