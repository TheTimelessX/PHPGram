<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\MessageEntity;

class TextQuote {
    public string $text;
    /**
     * a list of messageentity
     * @var MessageEntity[] | null
     */
    public array | null $entities;
    public int $position;
    public bool | null $is_manual;

    public function __construct(string $text, array | null $entities, int $position, bool | null $is_manual) {
        $this->text = $text;
        $this->entities = $entities;
        $this->position = $position;
        $this->is_manual = $is_manual;
    }

    public function toArray(): array {
        $ent = $this->entities;
        $clean_ = [];

        for ($i = 0; $i < count($ent); $i++) {
            array_push($clean_, $ent[$i]->toArray());
        }

        return [
            "text"=> $this->text,
            "entities"=> $clean_,
            "position"=> $this->position,
            "is_manual"=> $this->is_manual
        ];
    }
}
