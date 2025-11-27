<?php

require __DIR__ . '/vendor/autoload.php';

use PHPGram\Client;
use PHPGRam\StructureType\Message;

global $client;
$client = new Client("");

$client->add("message", function (Message $message) use ($client) {
    echo $message->text ?? "a message with no text";
    if (str_starts_with($message->text ?? "", "/start")){
        return $client->sendMessage($message->chat->id, "oh hello there");
    }
});

echo $client->getMe() ?? "no getMe data";

$client->start();

