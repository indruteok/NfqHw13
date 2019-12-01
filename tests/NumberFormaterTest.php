<?php

use PHPUnit\Framework\TestCase;
use NfqHw13\NumberFormatter;

class NumberFormatterTest extends TestCase
{
    protected $numberFormatter;

    protected function setUp(): void
    {
        $this->numberFormatter = new NumberFormatter();
    }

    public function testIfMillion()
    {
        $this->assertEquals($this->numberFormatter->formatNumber(2835779), "2.84M");
    }

        public function testIfThousand()
    {
        $this->assertEquals($this->numberFormatter->formatNumber(27533.78), "27534");
    }

    public function testIfMinus()
    {
        $this->assertEquals($this->numberFormatter->formatNumber(-123654.89), "-124K");
    }

}
