<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\Chat;
use PHPGram\StructureType\User;

class GiveawayWinners {
    public Chat $chat;
    public int $giveaway_message_id;
    public int $winners_selection_date;
    public int $winner_count;
    /**
     * a list of user
     * @var User[]
     */
    public array $winners;
    public int | null $additional_chat_count;
    public int | null $prize_star_count;
    public int | null $premium_subscription_month_count;
    public int | null $unclaimed_prize_count;
    public bool | null $only_new_members;
    public bool | null $was_refunded;
    public string | null $prize_description;

    public function __construct(
        Chat $chat,
        int $giveaway_message_id,
        int $winners_selection_date,
        int $winner_count,
        array $winners,
        int | null $additional_chat_count,
        int | null $prize_star_count,
        int | null $premium_subscription_month_count,
        int | null $unclaimed_prize_count,
        bool | null $only_new_members,
        bool | null $was_refunded,
        string | null $prize_description
    ){
        $this->chat = $chat;
        $this->giveaway_message_id = $giveaway_message_id;
        $this->winners_selection_date = $winners_selection_date;
        $this->winner_count = $winner_count;
        $this->unclaimed_prize_count = $unclaimed_prize_count;
        $this->premium_subscription_month_count = $premium_subscription_month_count;
        $this->prize_star_count = $prize_star_count;
        $this->prize_description = $prize_description;
        $this->was_refunded = $was_refunded;
        $this->winners = $winners;
        $this->additional_chat_count = $additional_chat_count;
        $this->only_new_members = $only_new_members;
    }

    public function toArray(): array {
        $_winners = $this->winners ?? [];
        $clean_ = [];

        for ($i = 0;$i < count($_winners);$i++){
            array_push($clean_, $_winners[$i]->toArray());
        }

        return [
            "winners"=> $clean_,
            "chat"=> $this->chat->toArray(),
            "giveaway_message_id"=> $this->giveaway_message_id,
            "winners_selection_date"=> $this->winners_selection_date,
            "winner_count"=> $this->winner_count,
            "unclaimed_prize_count"=> $this->unclaimed_prize_count,
            "premium_subscription_month_count"=> $this->premium_subscription_month_count,
            "prize_star_count"=> $this->prize_star_count,
            "prize_description"=> $this->prize_description,
            "was_refunded"=> $this->was_refunded,
            "additional_chat_count"=> $this->additional_chat_count,
            "only_new_members"=> $this->only_new_members
        ];
    }
}
