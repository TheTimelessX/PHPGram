<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\MessageEntityType;
use PHPGram\StructureType\User;

class MessageEntity {
    public MessageEntityType $type;
    public int $offset;
    public int $length;
    public string | null $url;
    public User | null $user;
    public string | null $language;
    public string | null $custom_emoji_id;

    public function __construct(
        MessageEntityType $type,
        int $offset,
        int $length,
        string | null $url,
        User | null $user,
        string | null $language,
        string | null $custom_emoji_id
    ){
        $this->type = $type;
        $this->offset = $offset;
        $this->length = $length;
        $this->url = $url;
        $this->user = $user;
        $this->language = $language;
        $this->custom_emoji_id = $custom_emoji_id;
    }

    public function toArray(): array {
        return [
            "type"=> $this->type->value,
            "offset"=> $this->offset,
            "length"=> $this->length,
            "url"=> $this->url ?? null,
            "user"=> $this->user ? $this->user->toArray() : null,
            "language"=> $this->language ?? null,
            "custom_emoji_id"=> $this->custom_emoji_id ?? null
        ];
    }
}
