<?php

namespace T1000\EventDispatcher;


class EventDispatcher {

    private $events;

    function  __construct()
    {
        $this->events = array();
    }

    public function attachEvent($event, $callback)
    {
        if (!isset($this->events[$event])) {
            $this->events[$event] = array();
        }
        $this->events[$event][] = $callback;
    }

    public function trigger($event)
    {
        foreach ($this->events[$event] as $callback)
        call_user_func($callback);
    }
}