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
        $this->events[] = $callback;
    }

    public function trigger($event)
    {
        foreach ($this->events as $callback)
        call_user_func($callback);
    }
}