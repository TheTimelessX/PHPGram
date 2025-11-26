<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\Media\PhotoSize;
use PHPGram\StructureType\Media\Animation;
use PHPGram\StructureType\MessageEntity;

class Game {
    public string $title;
    public string $description;
    /**
     * a list of photosize
     * @var PhotoSize[]
     */
    public array $photo;
    public string | null $text;
    /**
     * a list of messageentity
     * @var MessageEntity[] | null
     */
    public array $text_entities;
    public Animation $animation;

    public function __construct(
        string $title,
        string $description,
        array $photo,
        string | null $text,
        array $text_entities,
        Animation $animation
    ){
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->text = $text;
        $this->text_entities = $text_entities;
        $this->animation = $animation;
    }

    public function toArray(): array {
        $photo = $this->photo ?? [];
        $te = $this->text_entities ?? [];

        $clean_ = [];
        $clean__ = [];

        for ($i = 0;$i < count($photo);$i++){
            array_push($clean_, $photo[$i]->toArray());
        }

        for ($i = 0;$i < count($te);$i++){
            array_push($clean__, $te[$i]->toArray());
        }

        return [
            "title"=> $this->title,
            "description"=> $this->description,
            "photo"=> $photo,
            "text_entities"=> $clean__,
            "text"=> $this->text,
            "animation"=> $this->animation->toArray()
        ];
    }
}
