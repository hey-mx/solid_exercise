<?php

use App\Replacers\Linio;

class LinioTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider valuesProvider
     */
    public function testCanReplace($number, $value)
    {
        $linio = new Linio();
        $this->assertEquals($value, $linio->canReplace($number));
    }

    public function testReplace()
    {
        $linio = new Linio();
        $this->assertEquals(Linio::REPLACE_VALUE, $linio->replace());
    }

    public function valuesProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, true],
            [4, false],
            [5, false],
            [6, true],
        ];
    }
}