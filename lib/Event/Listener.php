<?php

namespace PHPGram\Event;

class Listener {
    private array $listeners;
    public function __construct() {
        $this->listeners = [];
    }

    public function add(string $event, callable $listener): bool {
        array_push($this->listeners, ["event" => $event, "listener" => $listener]);
        return true;
    }

    public function remove(string $event): self {
        for ($listener = 0;$listener < count($this->listeners);$listener++){
            if ($this->listeners[$listener]['event'] === $event){
                unset($this->listeners[$listener]);
            }
        }

        return $this;
    }

    public function getListeners(): array {
        return $this->listeners;
    }

    public function getOnlyEvents(): array {
        $events = [];
        for ($i = 0; $i < count($this->listeners); $i++){
            array_push($events, $this->listeners[$i]['event']);
        }

        return $events;
    }

    public function isEvent(string $event): bool {
        for ($listener = 0;$listener < count($this->listeners);$listener++){
            if ($this->listeners[$listener]['event'] === $event){
                return true;
            }
        }

        return false;
    }
}
