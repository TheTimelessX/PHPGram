<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\Chat;

class Story {
    public Chat $chat;
    public int $id;

    public function __construct(Chat $chat, int $id) {
        $this->chat = $chat;
        $this->id = $id;
    }

    public function toArray(): array {
        return [
            "id" => $this->id,
            "chat" => $this->chat ? $this->chat->toArray() : null
        ];
    }
}
