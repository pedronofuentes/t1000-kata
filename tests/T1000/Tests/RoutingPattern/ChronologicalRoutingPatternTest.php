<?php

namespace T1000\Tests\RoutingPattern;

use T1000\RoutingPattern\ChronologicalRoutingPattern;


class ChronologicalRoutingPatternTest extends \PHPUnit_Framework_TestCase
{
    public function testChronologicalRoutingPatternsAddsNewTarget()
    {
        $chronologicalRoutingPattern = new ChronologicalRoutingPattern();
        $targetPosition = new \stdClass(array(1, 3));

        $chronologicalRoutingPattern->addNewTarget($targetPosition);

        $this->assertEquals(1, count($chronologicalRoutingPattern->getTargets()));
    }

    public function testChronologicalRoutingPatternHasToReturnFirstTargetIn()
    {
        $chronologicalRoutingPattern = new ChronologicalRoutingPattern();
        $targetPositionA = new \stdClass(array(1, 3));
        $targetPositionB = new \stdClass(array(2, 3));
        $targetPositionC = new \stdClass(array(3, 3));

        $chronologicalRoutingPattern->addNewTarget($targetPositionA);
        $chronologicalRoutingPattern->addNewTarget($targetPositionB);
        $chronologicalRoutingPattern->addNewTarget($targetPositionC);

        $this->assertEquals($targetPositionA, $chronologicalRoutingPattern->getNextTarget());
    }
}
