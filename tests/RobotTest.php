<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RobotTest extends TestCase
{
    public function test_happy_path()
    {
        $position = RobotSimulator\ValueObjects\Position::from(7,3);
        $turnDegree = \RobotSimulator\ValueObjects\TurnDegree::from(0);
        $robot = new \RobotSimulator\Robot($position, $turnDegree);

        $robot->instruct("RAALAL");
        $this->assertEquals("9,4", (string) $robot->position());
        $this->assertEquals(\RobotSimulator\ValueObjects\TurnDegree::WEST, (string) $robot->turnDegree());
    }
    public function test_error()
    {
        $this->expectException(\RobotSimulator\Exceptions\InvalidInstructionException::class);
        $position = RobotSimulator\ValueObjects\Position::from(7,3);
        $turnDegree = \RobotSimulator\ValueObjects\TurnDegree::from(0);
        $robot = new \RobotSimulator\Robot($position, $turnDegree);
        $robot->instruct("RAALALP");
    }
}
