<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\CheckListTask;
use PHPGram\StructureType\MessageEntity;

class CheckList {
    public string $title;
    /**
     * a list of text entities
     * @var MessageEntity[] | null
     */
    public array | null $text_entities;
    /**
     * a list of tasks
     * @var CheckListTask[] | null
     */
    public array | null $tasks;
    public bool | null $others_can_add_tasks;
    public bool | null $others_can_mark_tasks_as_done;

    public function __construct(
        string $title,
        array | null $text_entities,
        array | null $tasks,
        bool | null $others_can_add_tasks,
        bool | null $others_can_mark_tasks_as_done
    ){
        $this->title = $title;
        $this->text_entities = $text_entities;
        $this->tasks = $tasks;
        $this->others_can_add_tasks = $others_can_add_tasks;
        $this->others_can_mark_tasks_as_done = $others_can_mark_tasks_as_done;
    }

    public function toArray(): array {
        $te = $this->text_entities ?? [];
        $ta = $this->tasks ?? [];
        $clean_ = [];
        $clean__ = [];

        for ($i = 0;$i < count($te);$i++){
            array_push($clean_, $te[$i]->toArray());
        }

        for ($i = 0;$i < count($ta);$i++){
            array_push($clean__, $ta[$i]->toArray());
        }
        
        return [
            "title"=> $this->title,
            "text_entities"=> $clean_,
            "tasks"=> $clean__,
            "others_can_add_tasks"=> $this->others_can_add_tasks,
            "others_can_mark_tasks_as_done"=> $this->others_can_mark_tasks_as_done
        ];
    }
}
