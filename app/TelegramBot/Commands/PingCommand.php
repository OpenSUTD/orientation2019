<?php

namespace App\TelegramBot\Commands;

use Telegram\Bot\Commands\Command;

class PingCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'ping';

    /**
     * @var string Command Description
     */
    protected $description = 'pong';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        $loadAverages = sys_getloadavg();
        $threads = substr_count(shell_exec('ps aux | grep /usr/sbin/apache2 | grep -v grep'), PHP_EOL);
        $ping = (time() - $this->getUpdate()->getMessage()->getdate()) * 2;
        $response = 'Pong... *'.$ping.'ms*';
        $response .= PHP_EOL.'CPU Load: '.implode(', ', $loadAverages);
        $response .= PHP_EOL.'Threads: '.$threads;
        // Reply with the commands list
        $this->replyWithMessage(['text' => $response, 'parse_mode' => 'Markdown']);
    }
}
