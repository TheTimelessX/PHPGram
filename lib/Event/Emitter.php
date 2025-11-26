<?php

namespace PHPGram\Event;

class Emitter {
    public function emit(callable $listener, ...$args): void {
        call_user_func($listener, $args);
    }
}
