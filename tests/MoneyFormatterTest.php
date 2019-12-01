<?php

use PHPUnit\Framework\TestCase;
use NfqHw13\MoneyFormatter;

class MoneyFormatterTest extends TestCase
{
    private $sut;

    public function setUp():void
    {
        $this->sut = new MoneyFormatter($this->getMoneyFormatterMock());
    }

    private function testMock()
    {
        $this->assertEmty($this->sut->getMoneyFormatterMock());
    }

    private  function  getMoneyFormatterMock()
    {
        $mock = $this->getMockBuilder(MoneyFormatter::class)
            ->getMock();
        return $mock;
    }
}