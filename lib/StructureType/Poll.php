<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\MessageEntity;
use PHPGram\StructureType\PollOption;
use PHPGram\StructureType\PollType;

class Poll {
    public string $id;
    public string $question;
    /**
     * a list of messageentity
     * @var MessageEntity[]|null
     */
    public array | null $question_entities;
    public PollOption $options;
    public int $total_voter_count;
    public bool $is_closed;
    public bool $is_anonymous;
    public PollType $type;
    public bool $allows_multiple_answers;
    public int | null $correct_option_id;
    public string | null $explanation;
    /**
     * a list of messageentity
     * @var MessageEntity[]|null
     */
    public array | null $explanation_entities;
    public int | null $open_period;
    public int | null $close_date;

    public function __construct(
        string $id,
        string $question,
        array | null $question_entities,
        PollOption $options,
        int $total_voter_count,
        bool $is_closed,
        bool $is_anonymous,
        PollType $type,
        bool $allows_multiple_answers,
        int | null $correct_option_id,
        string | null $explanation,
        array | null $explanation_entities,
        int | null $open_period,
        int | null $close_date,
    ){
        $this->id = $id;
        $this->question = $question;
        $this->question_entities = $question_entities;
        $this->options = $options;
        $this->total_voter_count = $total_voter_count;
        $this->is_closed = $is_closed;
        $this->is_anonymous = $is_anonymous;
        $this->type = $type;
        $this->allows_multiple_answers = $allows_multiple_answers;
        $this->correct_option_id = $correct_option_id;
        $this->explanation = $explanation;
        $this->explanation_entities = $explanation_entities;
        $this->open_period = $open_period;
        $this->close_date = $close_date;
    }

    public function toArray(): array {
        $qe = $this->question_entities ?? [];
        $ee = $this->explanation_entities ?? [];

        $qclean = [];
        $eclean = [];

        for ($i = 0;$i < count($qe);++$i){
            array_push($qclean, $qe[$i]->toArray());
        }

        for ($i = 0;$i < count($ee);++$i){
            array_push($eclean, $qe[$i]->toArray());
        }

        return [
            "id" => $this->id,
            "question"=> $this->question,
            "question_entities"=> $qclean,
            "explanation_entities"=> $eclean,
            "options" => $this->options->toArray(),
            "allows_multiple_answers"=> $this->allows_multiple_answers,
            "correct_option_id"=> $this->correct_option_id,
            "explanation"=> $this->explanation,
            "open_period"=> $this->open_period,
            "close_date"=> $this->close_date,
            "is_closed"=> $this->is_closed,
            "is_anonymous"=> $this->is_anonymous,
            "type"=> $this->type->value,
            "total_voter_count"=> $this->total_voter_count,
        ];
    }
}
