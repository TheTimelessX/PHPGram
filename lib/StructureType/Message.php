<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\DirectMessageTopic;
use PHPGram\StructureType\User;
use PHPGram\StructureType\Chat;
use PHPGram\StructureType\TextQuote;
use PHPGram\StructureType\Story;
use PHPGram\StructureType\ExternalReplyInfo;
use PHPGram\StructureType\LinkPreviewOptions;

use PHPGram\StructureType\MessageOriginUser;
use PHPGram\StructureType\MessageOriginHiddenUser;
use PHPGram\StructureType\MessageOriginChat;
use PHPGram\StructureType\MessageOriginChannel;
use PHPGram\StructureType\MessageEntity;

class Message {
    public int $message_id;
    public int | null $message_thread_id;
    public DirectMessageTopic | null $direct_message_topic;
    public User | null $from;
    public Chat | null $sender_chat;
    public int | null $sender_boost_count;
    public User | null $sender_business_bot;
    public int $date;
    public string | null $business_connection_id;
    public Chat $chat;
    public MessageOriginUser | MessageOriginHiddenUser | MessageOriginChat | MessageOriginChannel $forward_origin;
    public bool | null $is_topic_message;
    public bool | null $is_automatic_forward;
    public Message | null $reply_to_message;
    public ExternalReplyInfo | null $external_reply;
    public TextQuote | null $quote;
    public Story | null $reply_to_story;
    public int | null $reply_to_checklist_task_id;
    public User | null $via_bot;
    public int | null $edit_date;
    public bool | null $has_protected_content;
    public bool | null $is_from_offline;
    public bool | null $is_paid_post;
    public string | null $media_group_id;
    public string | null $author_signature;
    public int | null $paid_star_count;
    public string | null $text;
    /**
     * a list of messageentity
     * @var MessageEntity[] | null
     */
    public array | null $entities;
    public LinkPreviewOptions | null $link_preview_options;
    
}