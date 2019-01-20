<?php

namespace App\TelegramBot\Commands;

use Telegram\Bot\Commands\Command;

class KeyCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'key';

    /**
     * @var string Command Description
     */
    protected $description = 'Enter a key to unlock a clue';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        if (!isset($arguments[0])) {
            $this->replyWithMessage(['text' => 'Please enter a key']);

            return 'ok';
        } else {
            if (is_string($arguments)) {
                $key = $arguments;
            } elseif (is_array($arguments)) {
                $key = $arguments[0];
            }
        }
        // This will send a message using `sendMessage` method behind the scenes to
        // the user/chat id who triggered this command.
        // `replyWith<Message|Photo|Audio|Video|Voice|Document|Sticker|Location|ChatAction>()` all the available methods are dynamically
        // handled when you replace `send<Method>` with `replyWith` and use the same parameters - except chat_id does NOT need to be included in the array.
        $clue = \App\Clue::where('key', $key)->first();
        if ($clue == null) {
            $this->replyWithMessage(['text' => 'Invalid Key.']);
        } else {
            $this->replyWithMessage(['text' => "Report unlocked! It says... \n".$clue->clueText]);
        }
    }
}
