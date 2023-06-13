<?php

class Index
{
    public function hello()
    {
        /*
         * Using OS environment variables not variables defined in a .env file
         *      This variables are defines in deployment.yml
         */
        return "<h1>Hello! I'm {$_ENV['NAME']}, i'm {$_ENV['AGE']} years old.</h1>";
    }
}

$index = new Index();
echo $index->hello().PHP_EOL;
