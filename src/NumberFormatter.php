<?php

namespace NfqHw13;

class NumberFormatter
{
    public function formatNumber(float $number): string
    {
        if ($number >= 0 && $number < 1000 || $number < 0 && $number > -1000) {
            return str_replace('.00', '', number_format($number, 2, '.', ''));
        }
        if ($number >= 1000 && $number < 99950 || $number <= -1000 && $number > -99950) {
            return number_format($number, 0, '.', ' ');
        }
        if ($number >= 99950 && $number < 999500 || $number <= -99950 && $number > -999500) {
            return round($number / 1000) . 'K';
        }
        if ($number >= 999500 || $number <= -999500) {
            return number_format($number / 1000000, 2, '.', '') . 'M';
        }
        return false;
    }
}
