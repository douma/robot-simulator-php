<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TurnDegreeTest extends TestCase
{
    public function test_left()
    {
        $turnDegree = \RobotSimulator\ValueObjects\TurnDegree::from(0);
        $turnDegree = $turnDegree->left();
        $this->assertEquals(\RobotSimulator\ValueObjects\TurnDegree::WEST, (string) $turnDegree);
    }

    public function test_right()
    {
        $turnDegree = \RobotSimulator\ValueObjects\TurnDegree::from(0);
        $turnDegree = $turnDegree->right();
        $turnDegree = $turnDegree->right();
        $turnDegree = $turnDegree->right();
        $this->assertEquals(\RobotSimulator\ValueObjects\TurnDegree::WEST, (string) $turnDegree);
    }

    public function test_invalid_degree()
    {
        $this->expectException(\RobotSimulator\Exceptions\InvalidDegreeException::class);
        \RobotSimulator\ValueObjects\TurnDegree::from(1);
    }

    public function test_comparable()
    {
        $this->assertEquals(\RobotSimulator\ValueObjects\TurnDegree::from(0),
            \RobotSimulator\ValueObjects\TurnDegree::from(0));
        $this->assertNotEquals(\RobotSimulator\ValueObjects\TurnDegree::from(90),
            \RobotSimulator\ValueObjects\TurnDegree::from(0));
    }
}
