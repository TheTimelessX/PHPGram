<?php

namespace PHPGram\StructureType;

class User {
    public int $id;
    public bool $is_bot;
    public string $first_name;
    public string | null $last_name;
    public string | null $username;
    public string | null $language_code;
    public bool | null $is_premium;
    public bool | null $added_to_attachment_menu;
    public bool | null $can_join_groups;
    public bool | null $can_read_all_group_messages;
    public bool | null $supports_inline_queries;
    public bool | null $can_connect_to_business;
    public bool | null $has_main_web_app;

    public function __construct(
        int $id,
        bool $is_bot,
        string $first_name,
        string | null $last_name,
        string | null $username,
        string | null $language_code,
        bool | null $is_premium,
        bool | null $added_to_attachment_menu,
        bool | null $can_join_groups,
        bool | null $can_read_all_group_messages,
        bool | null $supports_inline_queries,
        bool | null $can_connect_to_business,
        bool | null $has_main_web_app
    ) {
        $this->id = $id;
        $this->is_bot = $is_bot;
        $this->first_name = $first_name;
        $this->last_name = $last_name ? $last_name : null;
        $this->username = $username ? str_replace("@", "", $username) : null;
        $this->language_code = $language_code ? $language_code : null;
        $this->is_premium = $is_premium ? $is_premium : null;
        $this->added_to_attachment_menu = $added_to_attachment_menu ? $added_to_attachment_menu : null;
        $this->can_join_groups = $can_join_groups ? $can_join_groups : null;
        $this->can_read_all_group_messages = $can_read_all_group_messages ? $can_read_all_group_messages : null;
        $this->supports_inline_queries = $supports_inline_queries ? $supports_inline_queries : null;
        $this->can_connect_to_business = $can_connect_to_business ? $can_connect_to_business : null;
        $this->has_main_web_app = $has_main_web_app ? $has_main_web_app : null;
    }

    public function getFullName(): string {
        return $this->first_name ." ". $this->last_name;
    }

    public function toArray(): array {
        return [
            "id" => $this->id,
            "is_bot" => $this->is_bot,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "username" => $this->username,
            "language_code" => $this->language_code,
            "is_premium" => $this->is_premium,
            "added_to_attachment_menu" => $this->added_to_attachment_menu,
            "can_join_groups" => $this->can_join_groups,
            "can_read_all_group_messages" => $this->can_read_all_group_messages,
            "supports_inline_queries" => $this->supports_inline_queries,
            "can_connect_to_business" => $this->can_connect_to_business,
            "has_main_web_app" => $this->has_main_web_app
        ];
    }
}
