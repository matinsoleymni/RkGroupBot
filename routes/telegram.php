<?php
/** @var SergiX44\Nutgram\Nutgram $bot */

use SergiX44\Nutgram\Nutgram;
use App\Telegram\Commands\StartCommand;
use App\Telegram\Handlers\DeleteMessagesHandler;
use App\Telegram\Handlers\PinMessageHandler;
use App\Telegram\Handlers\DateTimeHandler;
use App\Telegram\Handlers\ClassInfoHandler;

/*
|--------------------------------------------------------------------------
| Nutgram Handlers
|--------------------------------------------------------------------------
|
| Here is where you can register telegram handlers for Nutgram. These
| handlers are loaded by the NutgramServiceProvider. Enjoy!
|
*/

$bot->onCommand('start', StartCommand::class);

$bot->onText('(del|Del)(\s+\d+)?', [DeleteMessagesHandler::class, 'handle']);
$bot->onText('(pin|Pin)', [PinMessageHandler::class, 'handle']);
$bot->onText('(time|Time|date|Date|تایم|تاریخ)', [DateTimeHandler::class , 'handle']);
$bot->onCommand('class', [ClassInfoHandler::class , 'handle']);
$bot->onText('(جلسات|classes)', [ClassInfoHandler::class , 'handle']);
