<?php

namespace RobotSimulator;

use RobotSimulator\ValueObjects\Position;
use RobotSimulator\ValueObjects\TurnDegree;

class Robot
{
    private $position;
    private $turnDegree;

    public function __construct(Position $position, TurnDegree $turnDegree)
    {
        $this->position = $position;
        $this->turnDegree = $turnDegree;
    }

    public function instruct(string $instructions)
    {

    }

    public function turnDegree() : TurnDegree
    {
        return $this->turnDegree;
    }

    public function position() : Position
    {
        return $this->position;
    }
}
