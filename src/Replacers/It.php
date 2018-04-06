<?php
namespace App\Replacers;

class It extends Replaceable
{
    const REPLACE_VALUE = 'IT';

    /**
     * @param int $number
     * @return bool
     */
    public function canReplace(int $number) : bool
    {
        return !($number % 5);
    }
}