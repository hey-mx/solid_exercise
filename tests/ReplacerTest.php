<?php

use App\Replacers\Linio;
use App\Replacers\Linianos;
use App\Replacers\It;
use App\Replacer;

class ReplacerTest extends PHPUnit\Framework\TestCase
{

    public function testReplace()
    {
        $string = "1\n2\nLinio\n4\nIT\nLinio\n7\n8\n" .
            "Linio\nIT\n11\nLinio\n13\n14\nLinianos\n";
        $replacers = [
            new Linianos(),
            new Linio(),
            new It(),
        ];

        $replacer = new Replacer($replacers);
        ob_start();
        $replacer->print(1, 15);
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertEquals($string, $output);
    }

}