<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\Chat;

class MessageOriginChat {
    /**
     * its always chat
     * @var string
     */
    public string $type;
    public int $date;
    public Chat $chat;
    public string | null $author_signature;

    public function __construct(string $type, int $date, Chat $chat, string | null $author_signature) {
        $this->type = $type;
        $this->date = $date;
        $this->chat = $chat;
        $this->author_signature = $author_signature;
    }

    public function toArray(): array {
        return [
            "type"=> $this->type,
            "date"=> $this->date,
            "author_signature"=> $this->author_signature,
            "sender_chat"=> $this->chat ? $this->chat->toArray() : null
        ];
    }
}
