<?php

namespace App\Http\Controllers;

use SergiX44\Nutgram\Nutgram;

class BotController extends Controller
{
    public function __invoke(Nutgram $bot)
    {
        $bot->run();
    }
}
