<?php

namespace App\Notifications\Channels;

use Ghasedak\GhasedakApi;
use Illuminate\Notifications\Notification;

class SmsChannel
{
    public function send($notifiable, Notification $notification)
    {

        $message = $notification->toSms($notifiable);

        $api = new GhasedakApi('df10a7863417319bd54a2e403e0f4e5c3bb4cb4ebac17a90771ba2f38c550d6f');
        $response = $api->Verify(
            $message['mobile'],  // receptor
            $message['template'],  // name of the template which you've created in you account
            $message['parameters']
        );
        if ($response->result->code == 200) {
            return true;
        } else {
            return false;
        }
    }

}
