<?php

namespace RobotSimulator\Exceptions;

use \Exception;

class InvalidDegreeException extends Exception
{
    public static function forDegree(int $degree)
    {
        return new self("Invalid degree given " . $degree);
    }
}
