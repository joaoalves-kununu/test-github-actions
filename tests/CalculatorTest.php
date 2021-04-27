<?php

namespace Alves\TestGitHubActions\Tests;

use Alves\TestGitHubActions\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testSum() : void
    {
        $calculator = new Calculator();

        $this->assertEquals(2, $calculator->sum(1, 1));
    }
}