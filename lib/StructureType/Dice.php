<?php

namespace PHPGram\StructureType;

class Dice {
    public string $emoji;
    public string $value;

    public function __construct(
        string $emoji,
        string $value
    ){
        $this->emoji = $emoji;
        $this->value = $value;
    }

    public function toArray(): array {
        return [
            "emoji"=> $this->emoji,
            "value"=> $this->value
        ];
    }
}
