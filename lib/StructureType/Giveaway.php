<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\Chat;

class Giveaway {
    /**
     * a list of chat
     * @var Chat[]
     */
    public array $chats;
    public int $winners_selection_date;
    public int $winner_count;
    public bool | null $only_new_members;
    public bool | null $has_public_winners;
    public string | null $prize_description;
    /**
     * a list of string
     * @var string[] | null
     */
    public array | null $country_codes;
    public int $prize_star_count;
    public int $premium_subscription_month_count;

    public function __construct(
        array $chats,
        int $winners_selection_date,
        int $winner_count,
        bool | null $only_new_members,
        bool | null $has_public_winners,
        string | null $prize_description,
        array | null $country_codes,
        int $prize_star_count,
        int $premium_subscription_month_count
    ){
        $this->chats = $chats;
        $this->winners_selection_date = $winners_selection_date;
        $this->winner_count = $winner_count;
        $this->only_new_members = $only_new_members;
        $this->has_public_winners = $has_public_winners;
        $this->prize_description = $prize_description;
        $this->country_codes = $country_codes;
        $this->prize_star_count = $prize_star_count;
        $this->premium_subscription_month_count = $premium_subscription_month_count;
    }

    public function toArray(): array {
        $chts = $this->chats ?? [];
        $clean_ = [];

        for ($i = 0;$i < count($chts);$i++){
            array_push($clean_, $chts[$i]->toArray());
        }

        return [
            "chats"=> $clean_,
            "winners_selection_date"=> $this->winners_selection_date,
            "winner_count"=> $this->winner_count,
            "only_new_members"=> $this->only_new_members,
            "has_public_winners"=> $this->has_public_winners,
            "prize_description"=> $this->prize_description,
            "country_codes"=> $this->country_codes,
            "prize_star_count"=> $this->prize_star_count,
            "premium_subscription_month_count"=> $this->premium_subscription_month_count
        ];
    }
}
