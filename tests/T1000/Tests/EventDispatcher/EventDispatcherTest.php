<?php

namespace T1000\Tests\EventDispatcher;


use T1000\EventDispatcher\EventDispatcher;

class EventDispatcherTest extends \PHPUnit_Framework_TestCase
{

    public function testItLoadsEventsListeners()
    {
        $eventListener = new EventDispatcher();

        $anEvent = 'anEvent';
        $eventListener->on($anEvent, function() { return true; });
        $events = $eventListener->getEvents();

        $this->assertTrue(array_key_exists($anEvent, $events));
    }
} 