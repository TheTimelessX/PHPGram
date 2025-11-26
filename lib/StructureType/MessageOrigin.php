<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\User;
use PHPGram\StructureType\MessageOriginType;

class MessageOrigin {
    public MessageOriginType $type;
    public int $date;
    public User $user;

    public function __construct(MessageOriginType $type, int $date, User $user) {
        $this->type = $type;
        $this->date = $date;
        $this->user = $user;
    }

    public function toArray(): array {
        return [
            "type"=> $this->type->value,
            "date"=> $this->date,
            "user"=> $this->user->toArray() ?? null
        ];
    }
}
