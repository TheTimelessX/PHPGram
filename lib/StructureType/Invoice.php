<?php

namespace PHPGram\StructureType;

class Invoice {
    public string $title;
    public string $description;
    public string $start_parameter;
    public string $currency;
    public string $total_amount;

    public function __construct(
        string $title,
        string $description,
        string $start_parameter,
        string $currency,
        string $total_amount
    ){
        $this->title = $title;
        $this->description = $description;
        $this->start_parameter = $start_parameter;
        $this->currency = $currency;
        $this->total_amount = $total_amount;
    }

    public function toArray(): array {
        return [
            "title"=> $this->title,
            "description"=> $this->description,
            "start_parameter"=> $this->start_parameter,
            "currency"=> $this->currency,
            "total_amount"=> $this->total_amount
        ];
    }
}
