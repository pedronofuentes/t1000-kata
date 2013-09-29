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

    public function getEvents()
    {
        return $this->events;
    }
}
