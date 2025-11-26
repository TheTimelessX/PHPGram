<?php

namespace PHPGram\StructureType;

use PHPGram\StructureType\DirectMessageTopic;
use PHPGram\StructureType\User;
use PHPGram\StructureType\Chat;
use PHPGram\StructureType\MessageOrigin;

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
    public MessageOrigin $forward_origin;
    public bool | null $is_topic_message;
    public bool | null $is_automatic_forward;
    public Message | null $reply_to_message;
    
}