<?php

use gethin\Average;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    protected Average $Average;

    public function setUp(): void
    {
        $this->Average = new Average();
    }

    public function testCalculationOfMean(): void
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function testCalculationOfMedian(): void
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }

}
