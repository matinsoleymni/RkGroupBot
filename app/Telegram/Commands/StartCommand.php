<?php

namespace App\Telegram\Commands;

use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Handlers\Type\Command;
use SergiX44\Nutgram\Telegram\Properties\ParseMode;

class StartCommand extends Command
{
    protected string $command = 'start';

    protected ?string $description = 'The start command!';

    public function handle(Nutgram $bot): void
    {
    $bot->sendMessage("👋 سلام! من ربات دوره ششم روبیکمپ هستم. ✨\n\n".
        "📚 *دستورات من:*\n".
        "  - `time` یا `تاریخ`: نمایش تاریخ امروز به شمسی و میلادی ⏰🗓️\n".
        "  - `help`: دریافت راهنمای استفاده از ربات در پیوی ❓\n".
        "  - `/class` یا `جلسات` یا `classes`: اطلاعات مربوط به جلسات (به زودی) 🧑‍🏫🔜\n\n".
        "dev: Matin Soleymani \n",
        parse_mode: ParseMode::MARKDOWN_LEGACY
    );
    }
}

