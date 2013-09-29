<?php


namespace T1000;

use T1000\RoutingPattern\RoutingPatternInterface;


class T1000 {

    private $position;
    private $targets;
    private $routingPattern;

    function __construct($position)
    {
        $this->position =  $position;
        $this->targets = array();
    }

    public function setRoutingPattern(RoutingPatternInterface $routingPattern)
    {
        $this->routingPattern = $routingPattern;
    }

    public function getPosition() {
        return $this->position;
    }

    public function newTarget($targetPosition)
    {
        $this->routingPattern->addNewTarget($targetPosition);
    }

    public function lostTarget($targetPosition)
    {
        $targetIndex = array_search($targetPosition, $this->targets);
        if (false !== $targetIndex) {
            unset($this->targets[$targetIndex]);
        }
    }

    public function getTargets()
    {
        return $this->targets;
    }
}
