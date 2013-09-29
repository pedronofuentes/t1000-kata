<?php


namespace T1000\Tests;


use T1000\T1000;

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

    public function testT1000CreatedWithPosition()
    {
        $aPosition = new \stdClass();
        $aT1000 = new T1000($aPosition);

        $position = $aT1000->getPosition();

        $this->assertSame($position, $aPosition);
    }

    public function testAddNewTargetToT1000()
    {
        $aPosition = new \stdClass();
        $aT1000 = new T1000($aPosition);

        $targetPosition = new \stdClass();
        $aT1000->newTarget($targetPosition);

        $this->assertEquals(1, count($aT1000->getTargets()));
    }

    public function testSendLostTargetSignalToT1000()
    {
        $targetPosition = new \stdClass(array(1, 2));
        $anotherTargetPosition = new \stdClass(array(2, 3));
        $this->t1000->newTarget($targetPosition);
        $this->t1000->newTarget($anotherTargetPosition);

        $this->t1000->lostTarget($targetPosition);

        $this->assertEquals(1, count($this->t1000->getTargets()));
    }
}
