<?php

namespace App\Admin\Notifications;

use App\Models\Sending;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class DividerMessage extends Notification
{
    protected $message;
    public function __construct($message = null)
    {
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return ["telegram"];
    }

    public function toTelegram($sending)
    {
        $divider = str_repeat('*', 20);

        $message = $this->message ? $divider.PHP_EOL.PHP_EOL.$this->message.PHP_EOL.PHP_EOL.$divider : $divider;
        return TelegramMessage::create()
            // Optional recipient user id.
            ->to(env('MY_TELEGRAM_ID'))
            // Markdown supported.
            ->content($message);
    }

}
