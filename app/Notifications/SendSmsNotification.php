<?php

namespace App\Notifications;

use App\Notifications\Channels\SmsChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendSmsNotification extends Notification
{
    use Queueable;

    protected $mobile;
    protected $template;
    protected $parameters;

    /**
     * Create a new notification instance.
     */
    public function __construct($mobile, $template, $parameters)
    {
        $this->mobile = $mobile;
        $this->template = $template;
        $this->parameters = $parameters;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(): array
    {
        return [SmsChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toSms()
    {
        return [
            'mobile' => $this->mobile,
            'template' => $this->template,
            'parameters' => $this->parameters,
        ];
    }

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
}
