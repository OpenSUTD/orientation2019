<?php

namespace App\TelegramBot\Commands;

use Telegram\Bot\Commands\Command;
use App\House;
use App\OG;

class RegisterCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'register';

    /**
     * @var string Command Description
     */
    protected $description = 'Register this group as one of the OG groups';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        // This will send a message using `sendMessage` method behind the scenes to
        // the user/chat id who triggered this command.
        // `replyWith<Message|Photo|Audio|Video|Voice|Document|Sticker|Location|ChatAction>()` all the available methods are dynamically
        // handled when you replace `send<Method>` with `replyWith` and use the same parameters - except chat_id does NOT need to be included in the array.

        $chat_id = $this->getUpdate()->getMessage()->getChat()->getId();
        if (!isset($arguments[0])) {
            $this->replyWithMessage(['text' => 'Please enter OG name']);

            return 'ok';
        } else {
            if (is_string($arguments)) {
                $og_name = $arguments;
            } elseif (is_array($arguments)) {
                $og_name = $arguments[0];
            }
        }
        $existingOG = OG::where('chat_id', $chat_id)->first();
        if ($existingOG != null) {
            $this->replyWithMessage(['text' => 'This chat already belongs to: '.$existingOG->name]);

            return;
        }
        $house_select_markup = new \stdClass();
        $house_select_markup->inline_keyboard =
             House::pluck('name')->map(function ($item) {
                 return ['text' => $item, 'callback_data' => $item];
             })->toArray();
        $response = $this->replyWithMessage([
            'text' => 'What house does this belong to?',
            'reply_markup' => $house_select_markup,
        ]);
        $existingOG = OG::where('name', $og_name)->first();
        if ($existingOG != null) {
            $this->replyWithMessage(['text' => 'This name is already taken by: '.$exisingOG->chat_id]);

            return;
        }
        //return;
        $newOG = OG::create(['chat_id' => $chat_id, 'name' => $og_name]);
        // Reply with the commands list
        $this->replyWithMessage(['text' => $og_name.' has been registered to chat '.$chat_id]);
    }
}
