<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PositionTest extends TestCase
{
    public function test_advance()
    {
        $position = RobotSimulator\ValueObjects\Position::from(0,0);
        $turnDegree = \RobotSimulator\ValueObjects\TurnDegree::from(90);
        $position = $position->advance($turnDegree);

        $this->assertEquals('1,0', (string) $position);
    }

    public function test_comparable()
    {
        $this->assertEquals(\RobotSimulator\ValueObjects\Position::from(0,0),
            \RobotSimulator\ValueObjects\Position::from(0,0));
        $this->assertNotEquals(\RobotSimulator\ValueObjects\Position::from(0,1),
            \RobotSimulator\ValueObjects\Position::from(0,0));
    }
}
