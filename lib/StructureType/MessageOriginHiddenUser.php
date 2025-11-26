<?php

namespace PHPGram\StructureType;

class MessageOriginHiddenUser {
    /**
     * its always hidden_user
     * @var string
     */
    public string $type;
    public int $date;
    public string $sender_user_name;

    public function __construct(string $type, int $date, string $sender_user_name) {
        $this->type = $type;
        $this->date = $date;
        $this->sender_user_name = $sender_user_name;
    }

    public function toArray(): array {
        return [
            "type"=> $this->type,
            "date"=> $this->date,
            "sender_user_name"=> $this->sender_user_name
        ];
    }
}
