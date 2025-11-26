<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\Chat;

class MessageOriginChannel {
    /**
     * its always channel
     * @var string
     */
    public string $type;
    public int $date;
    public Chat $chat;
    public int $message_id;
    public string | null $author_signature;

    public function __construct(string $type, int $date, Chat $chat, int $message_id, string | null $author_signature) {
        $this->type = $type;
        $this->date = $date;
        $this->chat = $chat;
        $this->message_id = $message_id;
        $this->author_signature = $author_signature;
    }

    public function toArray(): array {
        return [
            "type"=> $this->type,
            "date"=> $this->date,
            "message_id"=> $this->message_id,
            "author_signature"=> $this->author_signature,
            "sender_chat"=> $this->chat ? $this->chat->toArray() : null
        ];
    }
}
