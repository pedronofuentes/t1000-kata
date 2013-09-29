<?php

namespace T1000\Tests\EventDispatcher;


use T1000\EventDispatcher\EventDispatcher;

class EventDispatcherTest extends \PHPUnit_Framework_TestCase
{
    private $eventListener;

    public function setUp()
    {
        $this->eventListener = new EventDispatcher();
    }

    public function testItLoadsEventsListeners()
    {
        $anEvent = 'anEvent';
        $this->eventListener->on($anEvent, function() { return true; });

        $events = $this->eventListener->getEvents();

        $this->assertTrue(array_key_exists($anEvent, $events));
    }

    public function testItStoresListenerAttachedToEvent()
    {
        $anEvent = 'anEvent';
        $aCallable = 'A callable';
        $this->eventListener->on($anEvent, $aCallable);

        $events = $this->eventListener->getEvents();

        $this->assertTrue(in_array($aCallable, $events[$anEvent]));
    }
} 