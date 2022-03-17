<?php

namespace App\Admin\Notifications;

use App\Models\Sending;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class SendingReport extends Notification
{
    public function via($notifiable)
    {
        return ["telegram"];
    }

    public function toTelegram(Sending $sending)
    {
        return TelegramMessage::create()
            // Optional recipient user id.
            ->to(env('MY_TELEGRAM_ID'))
            // Markdown supported.
            ->content($sending->getReport());
    }

}
