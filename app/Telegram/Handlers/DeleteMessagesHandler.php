<?php

namespace App\Telegram\Handlers;

use Exception;
use SergiX44\Nutgram\Nutgram;

class DeleteMessagesHandler
{
    public function handle(Nutgram $bot)
    {
        $message = $bot->message();
        $replyToMessage = $message->reply_to_message;

        if ($replyToMessage === null) {
            return;
        }

        $text = trim(mb_strtolower($message->text));

        if ($text === 'del') {
            $bot->deleteMessage($message->chat->id, $message->message_id);
            $bot->deleteMessage($replyToMessage->chat->id, $replyToMessage->message_id);
        } elseif (preg_match('/^del\s+(\d+)$/', $text, $matches)) {
            $number = (int) $matches[1];
            $chatId = $message->chat->id;
            $startMessageId = $replyToMessage->message_id;

            try {
                for ($i = 0; $i <= $number; $i++) {
                    $bot->deleteMessage($chatId, $startMessageId - $i);
                }
            }catch(Exception $e){

            }
            
            $bot->deleteMessage($chatId, $message->message_id); // Delete the 'del {NUMBER}' message itself
        }
    }
}
