<?php

namespace RobotSimulator\Exceptions;

use \Exception;

class InvalidInstructionException extends Exception
{
    public static function forChar(string $char)
    {
        return new self("Invalid instruction given " . $char);
    }
}
