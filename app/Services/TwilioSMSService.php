<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioSMSService
{
    public function sendSMS($to, $message)
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $from = env('TWILIO_FROM');

        $client = new Client($sid, $token);

        return $client->messages->create(
            $to,
            [
                'from' => $from,
                'body' => $message
            ]
        );
    }

    public function sendWhatsappMessage($to, $message)
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $from = env('TWILIO_FROM');

        $client = new Client($sid, $token);

        return $client->messages
            ->create(
                "whatsapp:" . $to, // to
                array(
                    "from" => "whatsapp:+14155238886",
                    "body" => $message
                )
            );
    }

    public function createNewValidationRequest($phone_number, $friendlyName)
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $from = env('TWILIO_FROM');

        $client = new Client($sid, $token);

        return $client->validationRequests->create(
            $phone_number, // phone_number
            ["friendlyName" => $friendlyName]
        );
    }
}
