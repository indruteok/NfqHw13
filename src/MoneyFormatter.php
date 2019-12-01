<?php

namespace NfqHw13;

class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function formatEur($number): string
    {
        return $this->numberFormatter->formatNumber($number) . ' €';
    }

    public function formatUsd($number): string
    {
        return '$' . $this->numberFormatter->formatNumber($number);
    }
}


//namespace App;
//
//class MoneyFormatter
//{
//    public function EurFormatter(string $amount): string
//    {
//        return $amount . ' €';
//    }
//
//    public function DollarFormatter(string $amount): string
//    {
//        return '$ ' . $amount;
//    }
//}
