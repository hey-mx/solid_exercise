<?php

namespace App;


class Replacer
{
    private $replacers = [];

    //TODO Validate if each replacer is instance of Replaceable
    public function __construct(array $replacers)
    {
        $this->replacers = $replacers;
    }

    public function print($from, $to) : void
    {
        for ($index = $from; $index <= $to; $index++) {
            $output = $index;
            foreach ($this->replacers as $replacer) {
                if ($replacer->canReplace($index)) {
                    $output = $replacer->replace();
                    break;
                }
            }
            echo $output, PHP_EOL;
        }
    }
}