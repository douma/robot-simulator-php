<?php

namespace RobotSimulator\ValueObjects;

use RobotSimulator\Exceptions\InvalidDegreeException;

class TurnDegree
{
    const NORTH = 'north', EAST = 'east', SOUTH = 'south', WEST = 'west';
    private $degree = 0;
    private function __construct(){}

    public static function from(int $degree) : self
    {
        if(!in_array($degree, [0,90,180,270])) {
            throw InvalidDegreeException::forDegree($degree);
        }
        $instance = new self;
        $instance->degree = $degree;
        return $instance;
    }

    public function left() : self
    {
        $instance = new self;
        $instance->degree = $this->degree == 0 ? 270 : $this->degree -= 90;
        return $instance;
    }

    public function right() : self
    {
        $instance = new self;
        $instance->degree = $this->degree == 360 ? 90 : $this->degree += 90;
        return $instance;
    }

    public function __toString() : string
    {
        if($this->degree == 0) {
            return self::NORTH;
        } elseif($this->degree == 90) {
            return self::EAST;
        } elseif($this->degree == 180) {
            return self::SOUTH;
        } elseif($this->degree == 270) {
            return self::WEST;
        }
    }
}
