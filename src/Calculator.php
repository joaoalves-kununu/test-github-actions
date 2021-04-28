<?php

namespace Alves\TestGitHubActions;

class Calculator
{
    public function sum(int $x, int $y) : int
    {
        return $x + $y;
    }

    public function diff(int $x, int $y) : int
    {
        return $x - $y;
    }
}