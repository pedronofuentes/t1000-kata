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

    public function getTargets()
    {
        return $this->targets;
    }
}
