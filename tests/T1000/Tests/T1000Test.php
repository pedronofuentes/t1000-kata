<?php


namespace T1000\Tests;


use T1000\T1000;

class T1000Test extends \PHPUnit_Framework_TestCase {

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
} 