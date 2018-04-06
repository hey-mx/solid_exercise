<?php

namespace App\Replacers;

class Linianos extends Replaceable
{
    /**
     * @param int $number
     * @return bool
     */
    function canReplace(int $number): bool
    {
        return !($number % 15);
    }
}