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

use PHPGram\StructureType\Media\PhotoSize;
use PHPGram\StructureType\Media\Document;

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
    public MessageOriginUser | MessageOriginHiddenUser | MessageOriginChat | MessageOriginChannel | null $forward_origin;
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
    /**
     * a list of photo
     * @var PhotoSize[] | null
     */
    public array | null $photo;
    public Document | null $document;
    
    public function __construct(
        int $message_id,
        int | null $message_thread_id,
        DirectMessageTopic | null $direct_message_topic,
        User | null $from,
        Chat | null $sender_chat,
        int | null $sender_boost_count,
        User | null $sender_business_bot,
        int $date,
        string | null $business_connection_id,
        Chat $chat,
        MessageOriginUser | MessageOriginHiddenUser | MessageOriginChat | MessageOriginChannel | null $forward_origin,
        bool | null $is_topic_message,
        bool | null $is_automatic_forward,
        Message | null $reply_to_message,
        ExternalReplyInfo | null $external_reply,
        TextQuote | null $quote,
        Story | null $reply_to_story,
        int | null $reply_to_checklist_task_id,
        User | null $via_bot,
        int | null $edit_date,
        bool | null $has_protected_content,
        bool | null $is_from_offline,
        bool | null $is_paid_post,
        string | null $media_group_id,
        string | null $author_signature,
        int | null $paid_star_count,
        string | null $text,
        array | null $entities,
        LinkPreviewOptions | null $link_preview_options,
        array | null $photo,
        Document | null $document
    ){
        $this->message_id = $message_id;
        $this->message_thread_id = $message_thread_id;
        $this->direct_message_topic = $direct_message_topic;
        $this->from = $from;
        $this->sender_chat = $sender_chat;
        $this->sender_boost_count = $sender_boost_count;
        $this->sender_business_bot = $sender_business_bot;
        $this->date = $date;
        $this->business_connection_id = $business_connection_id;
        $this->chat = $chat;
        $this->forward_origin = $forward_origin;
        $this->is_topic_message = $is_topic_message;
        $this->is_automatic_forward = $is_automatic_forward;
        $this->reply_to_message = $reply_to_message;
        $this->external_reply = $external_reply;
        $this->quote = $quote;
        $this->reply_to_story = $reply_to_story;
        $this->reply_to_checklist_task_id = $reply_to_checklist_task_id;
        $this->via_bot = $via_bot;
        $this->edit_date = $edit_date;
        $this->has_protected_content = $has_protected_content;
        $this->is_from_offline = $is_from_offline;
        $this->is_paid_post = $is_paid_post;
        $this->media_group_id = $media_group_id;
        $this->author_signature = $author_signature;
        $this->paid_star_count = $paid_star_count;
        $this->text = $text;
        $this->entities = $entities;
        $this->link_preview_options = $link_preview_options;
        $this->photo = $photo;
        $this->document = $document;
    }
}
