<?php

namespace RobotSimulator\ValueObjects;

class Position
{
    private $x, $y;
    private function __construct(){}

    public static function from(int $x, int $y) : self
    {
        $instance = new self;
        $instance->x = $x;
        $instance->y = $y;
        return $instance;
    }

    public function __toString() : string
    {
        return "{$this->x},{$this->y}";
    }

    public function advance(TurnDegree $turnDegree) : self
    {
        $position = (string) $turnDegree;
        $instance = clone $this;
        if(TurnDegree::NORTH == $position) {
            $instance->y -= 1;
        } elseif(TurnDegree::EAST == $position) {
            $instance->x += 1;
        } elseif(TurnDegree::SOUTH == $position) {
            $instance->y += 1;
        } elseif(TurnDegree::WEST == $position) {
            $instance->x -= 1;
        }
        return $instance;
    }
}
