<?php

namespace App\Replacers;

class Linio extends Replaceable
{
    const REPLACE_VALUE = 'Linio';

    /**
     * @param int $number
     * @return bool
     */
    public function canReplace(int $number): bool
    {
        return !($number % 3);
    }
}