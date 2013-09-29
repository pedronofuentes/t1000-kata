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
} 