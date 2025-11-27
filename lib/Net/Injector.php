<?php

namespace PHPGram\Net;

use PHPGram\StructureType\DirectMessageTopic;
use PHPGram\StructureType\LinkPreviewOptions;
use PHPGram\StructureType\Media\Document;
use PHPGram\StructureType\Media\PhotoSize;
use PHPGram\StructureType\User;
use PHPGram\StructureType\Chat;
use PHPGram\StructureType\ChatType;
use PHPGram\StructureType\Message;

class Injector {
    public function inject($update): Message {
        $photos = $update["photo"] ?? [];
        $_clean_photos = [];

        for ($i = 0;$i < count($photos);$i++){
            $p = new PhotoSize(
                $photos[$i]["file_id"],
                $photos[$i]["file_unique_id"],
                $photos[$i]["width"] ?? null,
                $photos[$i]["height"] ?? null,
                $photos[$i]["file_size"] ?? null
            );
            array_push($_clean_photos, $p);
        }

        return new Message(
            $update["message_id"],
            $update["message_thread_id"] ?? null,
            isset($update["direct_message_topic"])
                ? new DirectMessageTopic(
                    $update["direct_message_topic"]["topic_id"] ?? null,
                    isset($update["direct_message_topic"]["user"])
                    ? new User(
                        $update["direct_message_topic"]["user"]["id"] ?? null,
                        $update["direct_message_topic"]["user"]["is_bot"] ?? null,
                        $update["direct_message_topic"]["user"]["first_name"] ?? null,
                        $update["direct_message_topic"]["user"]["last_name"] ?? null,
                        $update["direct_message_topic"]["user"]["username"] ?? null,
                        $update["direct_message_topic"]["user"]["language_code"] ?? null,
                        $update["direct_message_topic"]["user"]["is_premium"] ?? null,
                        $update["direct_message_topic"]["user"]["added_to_attachment_menu"] ?? null,
                        $update["direct_message_topic"]["user"]["can_join_groups"] ?? null,
                        $update["direct_message_topic"]["user"]["can_read_all_group_messages"] ?? null,
                        $update["direct_message_topic"]["user"]["supports_inline_queries"] ?? null,
                        $update["direct_message_topic"]["user"]["can_connect_to_business"] ?? null,
                        $update["direct_message_topic"]["user"]["has_main_web_app"] ?? null
                    )
                    : null
                )
                : null,
            isset($update["from"])
                ? new User(
                    $update["from"]["id"] ?? null,
                    $update["from"]["is_bot"] ?? null,
                    $update["from"]["first_name"] ?? null,
                    $update["from"]["last_name"] ?? null,
                    $update["from"]["username"] ?? null,
                    $update["from"]["language_code"] ?? null,
                    $update["from"]["is_premium"] ?? null,
                    $update["from"]["added_to_attachment_menu"] ?? null,
                    $update["from"]["can_join_groups"] ?? null,
                    $update["from"]["can_read_all_group_messages"] ?? null,
                    $update["from"]["supports_inline_queries"] ?? null,
                    $update["from"]["can_connect_to_business"] ?? null,
                    $update["from"]["has_main_web_app"] ?? null
                )
                : null,
            isset($update["sender_chat"])
                ? new Chat(
                    $update["sender_chat"]["id"] ?? null,
                    $update["sender_chat"]["type"] === "private" ? ChatType::PRIVATE : 
                    $update["sender_chat"]["type"] === "group" ? ChatType::GROUP :
                    $update["sender_chat"]["type"] === "channel" ? ChatType::CHANNEL :
                    $update["sender_chat"]["type"] === "supergroup" ? ChatType::SUPERGROUP : null,
                    $update["sender_chat"]["title"] ?? null,
                    $update["sender_chat"]["username"] ?? null,
                    $update["sender_chat"]["first_name"] ?? null,
                    $update["sender_chat"]["last_name"] ?? null,
                    $update["sender_chat"]["is_forum"] ?? null,
                    $update["sender_chat"]["is_direct_messages"] ?? null
                )
                : null,
            isset($update["sender_boost_count"]) ? $update["sender_boost_count"] : null,
            isset($update["sender_business_bot"])
                ? new User(
                    $update["sender_business_bot"]["id"] ?? null,
                    $update["sender_business_bot"]["is_bot"] ?? null,
                    $update["sender_business_bot"]["first_name"] ?? null,
                    $update["sender_business_bot"]["last_name"] ?? null,
                    $update["sender_business_bot"]["username"] ?? null,
                    $update["sender_business_bot"]["language_code"] ?? null,
                    $update["sender_business_bot"]["is_premium"] ?? null,
                    $update["sender_business_bot"]["added_to_attachment_menu"] ?? null,
                    $update["sender_business_bot"]["can_join_groups"] ?? null,
                    $update["sender_business_bot"]["can_read_all_group_messages"] ?? null,
                    $update["sender_business_bot"]["supports_inline_queries"] ?? null,
                    $update["sender_business_bot"]["can_connect_to_business"] ?? null,
                    $update["sender_business_bot"]["has_main_web_app"] ?? null
                )
                : null,
            isset($update["date"]) ? $update["date"] : null,
            isset($update["business_connection_id"]) ? $update["business_connection_id"] : null,
            isset($update["chat"])
                ? new Chat(
                    $update["chat"]["id"] ?? null,
                    $update["chat"]["type"] === "private" ? ChatType::PRIVATE : 
                    $update["chat"]["type"] === "group" ? ChatType::GROUP :
                    $update["chat"]["type"] === "channel" ? ChatType::CHANNEL :
                    $update["chat"]["type"] === "supergroup" ? ChatType::SUPERGROUP : null,
                    $update["chat"]["title"] ?? null,
                    $update["chat"]["username"] ?? null,
                    $update["chat"]["first_name"] ?? null,
                    $update["chat"]["last_name"] ?? null,
                    $update["chat"]["is_forum"] ?? null,
                    $update["chat"]["is_direct_messages"] ?? null
                )
                : null,
            null,
            isset($update["is_topic_message"]) ? $update["is_topic_message"] : null,
            isset($update["is_automatic_forward"]) ? $update["is_automatic_forward"] : null,
            isset($update["reply_to_message"]) ? $this->inject($update["reply_to_message"]) : null,
            null,
            null,
            null,
            null,
            isset($update["via_bot"])
                ? new User(
                    $update["via_bot"]["id"] ?? null,
                    $update["via_bot"]["is_bot"] ?? null,
                    $update["via_bot"]["first_name"] ?? null,
                    $update["via_bot"]["last_name"] ?? null,
                    $update["via_bot"]["username"] ?? null,
                    $update["via_bot"]["language_code"] ?? null,
                    $update["via_bot"]["is_premium"] ?? null,
                    $update["via_bot"]["added_to_attachment_menu"] ?? null,
                    $update["via_bot"]["can_join_groups"] ?? null,
                    $update["via_bot"]["can_read_all_group_messages"] ?? null,
                    $update["via_bot"]["supports_inline_queries"] ?? null,
                    $update["via_bot"]["can_connect_to_business"] ?? null,
                    $update["via_bot"]["has_main_web_app"] ?? null
                )
                : null,
            isset($update["edit_date"]) ? $update["edit_date"] : null,
            isset($update["has_protected_content"]) ? $update["has_protected_content"] : null,
            isset($update["is_from_offline"]) ? $update["is_from_offline"] : null,
            isset($update["is_paid_post"]) ? $update["is_paid_post"] : null,
            isset($update["media_group_id"]) ? $update["media_group_id"] : null,
            isset($update["author_signature"]) ? $update["author_signature"] : null,
            isset($update["paid_star_count"]) ? $update["paid_star_count"] : null,
            isset($update["text"]) ? $update["text"] : null,
            null,
            isset($update["link_preview_options"])
                ? new LinkPreviewOptions(
                    $update["link_preview_options"]["is_disabled"] ?? null,
                    $update["link_preview_options"]["url"] ?? null,
                    $update["link_preview_options"]["prefer_small_media"] ?? null,
                    $update["link_preview_options"]["prefer_large_media"] ?? null,
                    $update["link_preview_options"]["show_above_text"] ?? null
                )
                : null,
            $_clean_photos,
            isset($update["document"])
                ? new Document(
                    $update["document"]["file_id"] ?? null,
                    $update["document"]["file_unique_id"],
                    isset($update["document"]["thumbnail"])
                        ? new PhotoSize(
                            $update["document"]["thumbnail"]["file_id"] ?? null,
                            $update["document"]["thumbnail"]["file_unique_id"] ?? null,
                            $update["document"]["thumbnail"]["width"] ?? null,
                            $update["document"]["thumbnail"]["height"] ?? null,
                            $update["document"]["thumbnail"]["file_size"] ?? null
                        )
                        : null,
                    $update["document"]["file_name"] ?? null,
                    $update["document"]["mime_type"] ?? null,
                    $update["document"]["file_size"] ?? null,
                )
                : null
        );
    }
}
