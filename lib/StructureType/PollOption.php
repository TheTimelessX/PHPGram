<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\MessageEntity;

class PollOption {
    public string $text;
    public string $question;
    /**
     * a list of messageentity
     * @var MessageEntity[] | null
     */
    public array | null $text_entities;
    public int | null $voter_count;

    public function __construct(
        string $text,
        string $question,
        array | null $text_entities,
        int | null $voter_count,
    ){
        $this->text = $text;
        $this->question = $question;
        $this->text_entities = $text_entities;
        $this->voter_count = $voter_count;
    }

    public function toArray(): array {
        return [
            "text"=> $this->text,
            "question"=> $this->question,
            "text_entities"=> $this->text_entities,
            "voter_count"=> $this->voter_count
        ];
    }
}
