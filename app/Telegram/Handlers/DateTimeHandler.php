<?php

namespace App\Telegram\Handlers;

use Morilog\Jalali\Jalalian;
use SergiX44\Nutgram\Nutgram;

class DateTimeHandler
{
    public function handle(Nutgram $bot): void
    {
        $text = trim(mb_strtolower($bot->message()->text));

        if ($text === 'time' || $text === 'تایم' || $text === 'تاریخ') {
            $now = now();
            $jalaliDate = Jalalian::fromCarbon($now)->format('Y/m/d');
            $gregorianDate = $now->format('Y/m/d');

            $bot->sendMessage("🗓️ تاریخ شمسی: {$jalaliDate}\n⏰ تاریخ میلادی: {$gregorianDate}");
        }
    }
}
