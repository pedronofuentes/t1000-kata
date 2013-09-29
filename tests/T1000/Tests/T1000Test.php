<?php


namespace T1000\Tests;


use T1000\T1000;
use \Mockery as m;

class T1000Test extends \PHPUnit_Framework_TestCase {


    /**
     * @var T1000
     */
    private $t1000;

    public function setUp()
    {
        $aPosition = new \stdClass();
        $this->t1000 = new T1000($aPosition);
    }

    public function tearDown()
    {
        m::close();
    }

    public function testT1000CreatedWithPosition()
    {
        $aPosition = new \stdClass();
        $aT1000 = new T1000($aPosition);

        $position = $aT1000->getPosition();

        $this->assertSame($position, $aPosition);
    }

    public function testAddNewTargetToT1000()
    {
        $aTargetPosition = new \stdClass(array(1, 1));
        $targetPosition = new \stdClass();
        $routingPatternMock = m::mock('T1000\Tests\RoutingPattern\RoutingPatternMock');
        $routingPatternMock->shouldReceive('addNewTarget')
            ->with($targetPosition)
            ->once();

        $aPosition = new \stdClass();
        $aT1000 = new T1000($aPosition);
        $aT1000->setRoutingPattern($routingPatternMock);

        $aT1000->newTarget($targetPosition);
    }

    public function testSendLostTargetSignalToT1000()
    {
//        $targetPosition = new \stdClass(array(1, 2));
//        $anotherTargetPosition = new \stdClass(array(2, 3));
//        $this->t1000->newTarget($targetPosition);
//        $this->t1000->newTarget($anotherTargetPosition);
//
//        $this->t1000->lostTarget($targetPosition);
//
//        $this->assertEquals(1, count($this->t1000->getTargets()));
    }
}
