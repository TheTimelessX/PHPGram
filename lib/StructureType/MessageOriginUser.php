<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\User;

class MessageOriginUser {
    /**
     * its always user
     * @var string
     */
    public string $type;
    public int $date;
    public User $user;

    public function __construct(string $type, int $date, User $user) {
        $this->type = $type;
        $this->date = $date;
        $this->user = $user;
    }

    public function toArray(): array {
        return [
            "type"=> $this->type,
            "date"=> $this->date,
            "sender_user"=> $this->user ? $this->user->toArray() : null
        ];
    }
}
