<?php

namespace PHPGram;

use PHPGram\Net\Worker;
use PHPGram\StructureType\LinkPreviewOptions;

class Client extends Worker {
    public string $token;
    private string $url = "https://api.telegram.org";
    private string $api;
    public function __construct(string $token){
        $this->token = $token;
        $this->api = $this->url . "/bot" . $this->token;
    }

    private function request(
        string $method,
        array $options = []
    ): mixed {
        $opts = [
            "http" => [
                "method"  => "POST",
                "header"  => "Content-Type: application/json\r\n",
                "content" => json_encode($options),
                "ignore_errors" => true
            ]
        ];
        
        $context  = stream_context_create($opts);
        return file_get_contents($this->api . "/" . $method, false, $context);
    }

    public function getMe(): mixed {
        return $this->request("getMe", []);
    }

    public function sendMessage(
        string $chat_id,
        string $text,
        string | null $parse_mode = null,
        array $inline_keyboard = [],
        array $reply_keyboard = [],
        LinkPreviewOptions | null $link_preview_options = null,
        array $other_keyboard_options = []
    ): mixed {
        $opts = [
            "chat_id" => $chat_id,
            "text" => $text,
            "parse_mode" => $parse_mode,
            "reply_markup" => [
                "inline_keyboard" => $inline_keyboard,
                "keyboard" => $reply_keyboard
            ]
        ];

        $opts = array_merge($opts["reply_markup"], $other_keyboard_options);

        return $this->request(
            "sendMessage",
            $opts
        );
    }
}
