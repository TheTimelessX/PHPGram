<?php

namespace PHPGram\StructureType;

class Contact {
    public string $phone_number;
    public string $first_name;
    public string $last_name;
    public int | null $user_id;
    public string | null $vcard;

    public function __construct(
        string $phone_number,
        string $first_name,
        string $last_name,
        int | null $user_id,
        string | null $vcard
    ){
        $this->phone_number = $phone_number;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->user_id = $user_id;
        $this->vcard = $vcard;
    }

    public function toArray(): array {
        return [
            "phone"=> $this->phone_number,
            "first_name"=> $this->first_name,
            "last_name"=> $this->last_name,
            "user_id"=> $this->user_id,
            "vcard"=> $this->vcard
        ];
    }
}
