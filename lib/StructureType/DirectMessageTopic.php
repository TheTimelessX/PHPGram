<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\User;

class DirectMessageTopic {
    public int $topic_id;
    public User | null $user;

    public function __construct(int $topic_id, User $user){
        $this->topic_id = $topic_id;
        $this->user = $user;
    }

    public function toArray(): array {
        return [
            "topic_id" => $this->topic_id,
            "user" => $this->user ? $this->user->toArray() : null
        ];
    }
}
