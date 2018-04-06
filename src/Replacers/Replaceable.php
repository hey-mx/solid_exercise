<?php

namespace App\Replacers;

abstract class Replaceable
{
    const REPLACE_VALUE = 'Linianos';
    protected $number;

    /**
     * @param mixed $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function replace() : string {
        return static::REPLACE_VALUE;
    }

    abstract function canReplace(int $number) : bool ;
}