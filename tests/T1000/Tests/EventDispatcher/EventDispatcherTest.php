<?php

namespace T1000\Tests\EventDispatcher;


use \Mockery as m;
use T1000\EventDispatcher\EventDispatcher;

class EventDispatcherTest extends \PHPUnit_Framework_TestCase
{
    public function testItCallsCallableWhenAnEventIsTriggered()
    {
        $eventDispatcher = new EventDispatcher();
        $functionMock = $this->getMock('AClass', array('aFunction'));
        $functionMock->expects($this->once())->method('aFunction');

        $eventDispatcher->attachEvent('EVENT', array($functionMock, 'aFunction'));
        $eventDispatcher->trigger('EVENT');
    }
}
