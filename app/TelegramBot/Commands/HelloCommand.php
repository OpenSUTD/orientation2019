<?php

namespace App\TelegramBot\Commands;

use Telegram\Bot\Commands\Command;

class HelloCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'hello';

    /**
     * @var string Command Description
     */
    protected $description = 'Say Hello';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        // This will send a message using `sendMessage` method behind the scenes to
        // the user/chat id who triggered this command.
        // `replyWith<Message|Photo|Audio|Video|Voice|Document|Sticker|Location|ChatAction>()` all the available methods are dynamically
        // handled when you replace `send<Method>` with `replyWith` and use the same parameters - except chat_id does NOT need to be included in the array.

        $response = 'Hello '.$this->getUpdate()->getMessage()->getFrom()->getUsername();

        // Reply with the commands list
        $this->replyWithMessage(['text' => $response]);
    }
}
