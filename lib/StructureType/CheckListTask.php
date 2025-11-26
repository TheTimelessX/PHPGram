<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\MessageEntity;
use PHPGram\StructureType\User;

class CheckListTask {
    public int $id;
    public string $text;
    /**
     * a list of message entity
     * @var MessageEntity[] | null
     */
    public array | null $text_entities;
    public User | null $completed_by_user;
    public int | null $completion_date;

    public function __construct(
        int $id,
        string $text,
        array | null $text_entities,
        User | null $completed_by_user,
        int | null $completion_date
    ){
        $this->id = $id;
        $this->text = $text;
        $this->text_entities = $text_entities;
        $this->completed_by_user = $completed_by_user;
        $this->completion_date = $completion_date;
    }

    public function toArray(): array {
        $te = $this->text_entities ?? [];
        $clean_ = [];

        for ($i = 0;$i < count($te); $i++) {
            array_push($clean_, $te[$i]->toArray());
        }

        return [
            "id"=> $this->id,
            "text"=> $this->text,
            "text_entities"=> $clean_,
            "completed_by_user"=> $this->completed_by_user,
            "completion_date"=> $this->completion_date
        ];
    }
}