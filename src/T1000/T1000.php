<?php


namespace T1000;


class T1000 {

    private $position;
    private $targets;

    function __construct($position)
    {
        $this->position =  $position;
        $this->targets = array();
    }

    public function getPosition() {
        return $this->position;
    }

    public function newTarget($targetPosition)
    {
        $this->targets[] = $targetPosition;
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
