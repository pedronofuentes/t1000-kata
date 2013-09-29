<?php

namespace T1000\RoutingPattern;


class ChronologicalRoutingPattern {

    private $targets;

    function __construct()
    {
        $this->targets = array();
    }


    public function addNewTarget($targetPosition)
    {
        $this->targets[] = $targetPosition;
    }

    public function getNextTarget()
    {
        return array_shift($this->targets);
    }

    public function getTargets()
    {
        return $this->targets;
    }
}
