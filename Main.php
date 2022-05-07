<?php

declare(strict_types=1);

namespace Telegram;

date_default_timezone_set("Europe/Kiev");

class Main
{
    //GET it by query: https://api.telegram.org/bot830094853:AAGgUWRVkp6FozjrCS2bAd5d1m_a3pCIKhE/getUpdates
    /**
     * @var string[]
     */
    private array $env;

    public function __construct()
    {
        $this->env = $this->getEnv();
    }

    /**
     * @param string $text
     *
     * @return void
     */
    public function sendMessage(string $text)
    {
        $data    = [
            'chat_id'    => $this->env['chat_id'],
            'text'       => $text,
            'parse_mode' => $this->env['parse_mode'],
        ];
        $botPath = 'bot' . $this->env['bot_api_token'];
        $request = \sprintf('https://api.telegram.org/%s/sendMessage?%s', $botPath, http_build_query($data));
        file_get_contents($request);
    }

    /**
     * @return array
     */
    private function getEnv(): array
    {
        return include __DIR__ . '/env.php';
    }
}
