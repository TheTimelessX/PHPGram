<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\ChatType;

class Chat {
    public int $id;
    public ChatType $type;
    public string | null $title;
    public string | null $username;
    public string | null $first_name;
    public string | null $last_name;
    public bool | null $is_forum;
    public bool | null $is_direct_messages;

    public function __construct(
        int $id,
        ChatType $type,
        string | null $title,
        string | null $username,
        string | null $first_name,
        string | null $last_name,
        bool | null $is_forum,
        bool | null $is_direct_messages
    ){
        $this->id = $id;
        $this->type = $type;
        $this->title = $title ? $title : null;
        $this->username = $username ? str_replace("@", "", $username) : null;
        $this->first_name = $first_name ? $first_name : null;
        $this->last_name = $last_name ? $last_name : null;
        $this->is_forum = $is_forum ? $is_forum : null;
        $this->is_direct_messages = $is_direct_messages ? $is_direct_messages : null;
    }

    public function toArray(): array {
        return [
            "id" => $this->id,
            "type" => $this->type->value,
            "username" => $this->username,
            "first_name" => $this->first_name, 
            "last_name" => $this->last_name,
            "is_forum"=> $this->is_forum,
            "is_direct_message"=> $this->is_direct_messages
        ];
    }
}
