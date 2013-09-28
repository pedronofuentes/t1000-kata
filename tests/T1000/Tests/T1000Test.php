<?php


namespace T1000\Tests;


use T1000\T1000;

class T1000Test extends \PHPUnit_Framework_TestCase {
    public function testT1000CreatedWithPosition() {
        $aPosition = new \stdClass();
        $aT1000 = new T1000($aPosition);

        $position = $aT1000->getPosition();

        $this->assertSame($position, $aPosition);
    }
} 