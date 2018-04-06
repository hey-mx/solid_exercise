<?php

use App\Replacers\It;

class ItTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider valuesProvider
     */
    public function testCanReplace($number, $value)
    {
        $it = new It();
        $this->assertEquals($value, $it->canReplace($number));
    }

    public function testReplace()
    {
        $it = new It();
        $this->assertEquals(It::REPLACE_VALUE, $it->replace());
    }

    public function valuesProvider()
    {
        return [
            [4, false],
            [5, true],
            [10, true],
            [20, true],
            [21, false],
        ];
    }
}