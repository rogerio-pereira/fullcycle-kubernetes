<?php

class Index
{
    public function hello()
    {
        return "<h1>Hello Fullcycle!</h1>";
    }
}

$index = new Index();
echo $index->hello().PHP_EOL;
