<?php

namespace T1000\Tests\RoutingPattern;


use T1000\RoutingPattern\RoutingPatternInterface;

class RoutingPatternMock implements RoutingPatternInterface{

    public function addNewTarget($position)
    {
        return true;
    }

} 