<?php

namespace PHPGram\Net;

use PHPGram\Event\Listener;
use PHPGram\Event\Emitter;
use PHPGram\StructureType\DirectMessageTopic;
use PHPGram\StructureType\LinkPreviewOptions;
use PHPGram\StructureType\Media\Document;
use PHPGram\StructureType\Media\PhotoSize;
use PHPGram\StructureType\TextQuote;
use PHPGram\StructureType\User;
use PHPGram\StructureType\Chat;
use PHPGram\StructureType\ChatType;
use PHPGram\StructureType\Message;

class Worker extends Listener {
    public Emitter $emitter;
    public Injector $injector;
    public string $token;

    public function __construct(string $token){
        $this->emitter = new Emitter();
        $this->injector = new Injector();
        $this->token = $token;
    }

    public function start(): void {
        $update = json_decode(file_get_contents("php://input"), true);
        if (isset($update["message"])){
            if (in_array("message", parent::getOnlyEvents())){
                $message = $this->injector->inject($update['message']);
                $listeners = parent::getListeners();
                for ( $i = 0; $i < count($listeners); $i++ ){
                    if ($listeners[$i]["event"] === "message"){
                        $this->emitter->emit($listeners[$i]["listener"], $message);
                    }
                }
            }
        }
    }
}
