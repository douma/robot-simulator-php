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
}
