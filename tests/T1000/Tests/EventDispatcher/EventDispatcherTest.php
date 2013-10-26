<?php

namespace T1000\Tests\EventDispatcher;


use T1000\EventDispatcher\EventDispatcher;

class EventDispatcherTest extends \PHPUnit_Framework_TestCase
{
    private $eventDispatcher;

    public function setUp()
    {
        $this->eventDispatcher = new EventDispatcher();
    }

    public function testItCallsCallableWhenAnEventIsTriggered()
    {
        $functionMock = $this->getMock('AClass', array('aFunction'));
        $functionMock->expects($this->once())->method('aFunction');

        $this->eventDispatcher->attachEvent('EVENT', array($functionMock, 'aFunction'));
        $this->eventDispatcher->trigger('EVENT');
    }

    public function testItHandlesMultipleCallablesAttachedToAnEvent()
    {
        $functionMock = $this->getMock('AClass', array('aFunction', 'anotherFunction'));
        $functionMock->expects($this->once())->method('aFunction');
        $functionMock->expects($this->once())->method('anotherFunction');

        $this->eventDispatcher->attachEvent('EVENT', array($functionMock, 'aFunction'));
        $this->eventDispatcher->attachEvent('EVENT', array($functionMock, 'anotherFunction'));

        $this->eventDispatcher->trigger('EVENT');
    }

    public function testItCanHandleMultipleEvents()
    {
        $functionMock = $this->getMock('AClass', array('aFunction', 'anotherFunction'));
        $functionMock->expects($this->exactly(2))->method('aFunction');

        $this->eventDispatcher->attachEvent('AN_EVENT', array($functionMock, 'aFunction'));
        $this->eventDispatcher->attachEvent('ANOTHER_EVENT', array($functionMock, 'aFunction'));

        $this->eventDispatcher->trigger('AN_EVENT');
        $this->eventDispatcher->trigger('ANOTHER_EVENT');
    }
}
