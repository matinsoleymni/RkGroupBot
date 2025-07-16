<?php

namespace App\Telegram\Handlers;

use SergiX44\Nutgram\Nutgram;

class ClassInfoHandler
{
    public function handle(Nutgram $bot): void
    {
        $bot->sendMessage('این بخش به زودی توسعه پیدا خواهد کرد.');
    }
}
