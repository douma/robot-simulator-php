<?php

namespace RobotSimulator;

use RobotSimulator\Exceptions\InvalidInstructionException;
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
        foreach(str_split($instructions) as $char) {
            if($char == "R") {
                $this->turnDegree = $this->turnDegree->right();
            } elseif($char == "L") {
                $this->turnDegree = $this->turnDegree->left();
            } elseif($char == "A") {
                $this->position = $this->position->advance($this->turnDegree);
            } else {
                throw InvalidInstructionException::forChar($char);
            }
        }
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
