<?php

use App\Replacers\Linianos;

class LinianosTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider valuesProvider
     */
    public function testCanReplace($number, $value)
    {
        $linianos = new Linianos();
        $this->assertEquals($value, $linianos->canReplace($number));
    }

    public function testReplace()
    {
        $linianos = new Linianos();
        $this->assertEquals(Linianos::REPLACE_VALUE, $linianos->replace());
    }

    public function valuesProvider()
    {
        return [
            [10, false],
            [15, true],
            [20, false],
            [25, false],
            [30, true],
            [35, false],
        ];
    }
}