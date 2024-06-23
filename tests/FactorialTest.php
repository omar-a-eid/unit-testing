<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Factorial.php';

class FactorialTest extends TestCase
{
    public function testFactorialZero()
    {
        $this->assertEquals(1, factorial(0));
    }

    public function testFactorialOne()
    {
        $this->assertEquals(1, factorial(1));
    }

    public function testFactorialFive()
    {
        $this->assertEquals(120, factorial(5));
    }

    public function testFactorialRandomInt()
    {
        $n = 6;
        $expected = $n * factorial($n - 1);
        $this->assertEquals($expected, factorial($n));
    }

    public function testFactorialNegative()
    {
        $this->assertNull(factorial(-3));
    }

    public function testFactorialFloat()
    {
        $this->assertNull(factorial(1.5));
    }

    public function testFactorialBoolean()
    {
        $this->assertNull(factorial(false));
    }

    public function testFactorialString()
    {
        $this->assertNull(factorial('abc'));
    }
}
