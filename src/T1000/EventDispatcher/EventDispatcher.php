<?php

namespace T1000\EventDispatcher;


class EventDispatcher {

    private $events;

    function __construct()
    {
        $this->events = array();
    }


    public function on($event, $listener)
    {
        if (!isset($this->events[$event])) {
            $this->events[$event] = array();
        }

        $this->events[$event][] = $listener;
    }

    public function trigger($event)
    {
        foreach ($this->events[$event] as $callable) {
            call_user_func($callable);
        }
    }

    public function getEvents()
    {
        return $this->events;
    }
}
