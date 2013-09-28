<?php


namespace T1000;


class T1000 {

    private $position;

    function __construct($position)
    {
        $this->position =  $position;
    }

    public function getPosition() {
        return $this->position;
    }
} 