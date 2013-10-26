<?php

namespace T1000\EventDispatcher;


class EventDispatcher {

    private $events;

    public function attachEvent($event, $callback)
    {
        $this->events = $callback;
    }

    public function trigger($event)
    {
        call_user_func($this->events);
    }
}