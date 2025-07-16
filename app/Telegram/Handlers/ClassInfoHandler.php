<?php

namespace App\Telegram\Handlers;

use App\Models\onlineClass;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Properties\ParseMode;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class ClassInfoHandler
{
    public function handle(Nutgram $bot): void
    {
        $sessions = onlineClass::get();
        foreach($sessions as $session){
            $message = "📚 *نام کلاس:* {$session->name}\n";
            $message .= "🗓️ *روز:* {$session->day}\n";
            $message .= "⏰ *ساعت:* {$session->time}\n\n";
            $message .= "ℹ️ *توضیحات:* {$session->info}\n";

            $keyboard = InlineKeyboardMarkup::make()
                ->addRow(InlineKeyboardButton::make('🔗 ورود به کلاس', $session->link));

            $bot->sendMessage($message, parse_mode: ParseMode::MARKDOWN_LEGACY, reply_markup: $keyboard);
        }
    }
}
