<?php

namespace App\Notifications;

use App\Services\OneSignalService;
use App\Services\TwilioSMSService;
use App\SMS\sms;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Orchid\Platform\Notifications\DashboardChannel;
use Orchid\Platform\Notifications\DashboardMessage;

class SystemNotification extends Notification
{
    use Queueable;

    public $title;
    public $message;
    public $sms;
    public $email;
    public $token;

    /**
     * Create a new notification instance.
     */
    public function __construct($title, $message, $sms = false, $email = false, $token = null)
    {
        $this->title = $title;
        $this->message = $message;
        $this->sms = $sms;
        $this->email = $email;
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [DashboardChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //         ->line('The introduction to the notification.')
    //         ->action('Notification Action', url('/'))
    //         ->line('Thank you for using our application!');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

    public function toDashboard($notifiable)
    {
        // Send notification to mobile
        // if (isset($notifiable->push_token) && !empty($notifiable->push_token)) {
        //     $this->sendNotificationToMobile([
        //         'title' => $this->title,
        //         'body' => $this->message,
        //         'to' => $notifiable->push_token,
        //     ]);
        // }

        if ($this->sms && $notifiable->phone) {
            if ($notifiable->country_phone_code == '+90') {
                $sms = new sms();
                $sms->send([
                    'message' => $this->message,
                    'no' => $notifiable->phone,
                ]);
            } else {
                $twilioService = new TwilioSMSService();
                $twilioService->sendSMS($notifiable->country_phone_code . ' ' . $notifiable->phone, $this->message);
            }
        }

        if ($this->email && $notifiable->email) {
            $oneSignal = new OneSignalService();
            $oneSignal->sendEmail($this->title, $this->message, $notifiable->email);
        }

        if ($this->token && $notifiable->email) {
            $oneSignal = new OneSignalService();
            $oneSignal->sendResetPasswordEmail($this->title, $this->message, $this->token, $notifiable->user_id, $notifiable->email);
        }

        return (new DashboardMessage)
            ->title($this->title)
            ->message($this->message);
    }

    // public function sendNotificationToMobile($data, $multiple = false, $defaultRecipients = [])
    // {
    //     $messages = [];

    //     if ($multiple) {
    //         foreach ($data as $item) {
    //             $message = [
    //                 'title' => $item['title'],
    //                 'body' => $item['body'],
    //                 'data' => $item['data'] ?? [],
    //             ];

    //             $messages[] = $message;
    //             $defaultRecipients[] = $item['to'];
    //         }
    //     } else {
    //         $messages = [
    //             [
    //                 'title' => $data['title'],
    //                 'body' => $data['body'],
    //             ],
    //         ];

    //         $defaultRecipients[] = $data['to'];
    //     }

    //     return (new Expo())->send($messages)->to($defaultRecipients)->push();
    // }
}
