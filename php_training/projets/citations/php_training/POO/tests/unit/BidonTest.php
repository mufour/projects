<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class BidonTest extends TestCase
{
    function testThreeAndFiveEqualsEight(): void
    {
        $this->assertEquals(8, 3+5);
    }
}