<?php

namespace App\Telegram\Handlers;

use SergiX44\Nutgram\Nutgram;

class PinMessageHandler
{
    public function handle(Nutgram $bot): void
    {
        $message = $bot->message();
        $replyToMessage = $message->reply_to_message;

        if ($replyToMessage === null) {
            return;
        }

        $text = trim(mb_strtolower($message->text));

        if ($text === 'pin') {
            $bot->pinChatMessage($replyToMessage->chat->id, $replyToMessage->message_id);
            $bot->deleteMessage($message->chat->id, $message->message_id); // Delete the 'pin' message itself
        }
    }
}
