<?php

use NfqHw13\MoneyFormatter;
use NfqHw13\NumberFormatter;

require __DIR__ . '/vendor/autoload.php';

$a = new NumberFormatter();
echo $a->formatNumber(2835779).PHP_EOL;
echo $a->formatNumber(999500).PHP_EOL;
echo $a->formatNumber(535216).PHP_EOL;
echo $a->formatNumber(99950).PHP_EOL;
echo $a->formatNumber(27533.78).PHP_EOL;
echo $a->formatNumber(999.99).PHP_EOL;
echo $a->formatNumber(999999.99).PHP_EOL;
echo $a->formatNumber(533.1).PHP_EOL;
echo $a->formatNumber(66.666666).PHP_EOL;
echo $a->formatNumber(12.00).PHP_EOL;
echo $a->formatNumber(-123654.89).PHP_EOL.PHP_EOL;

$b = new MoneyFormatter(new NumberFormatter());
echo $b->formatEur(2835779).PHP_EOL;
echo $b->formatEur(211.99).PHP_EOL;
echo $b->formatUsd(2835779).PHP_EOL;
echo $b->formatUsd(211.99).PHP_EOL;