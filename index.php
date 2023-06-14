<?php

class Index
{
    public function hello()
    {
        $fileData = $this->getFileData("familyMembers/family.txt");

        /*
         * Using OS environment variables not variables defined in a .env file
         *      This variables are defines in deployment.yml
         */
        return "<h1>
                    Hello! I'm {$_ENV['NAME']}, i'm {$_ENV['AGE']} years old.    
                </h1>
                
                <p>
                    My family: {$fileData}
                </p>";
    }

    private function getFileData($file)
    {
        try {
            return file_get_contents($file);
        } catch(Exception $e) {
            exit("Error: File {$file} not found!");
        }
    }
}

$index = new Index();
echo $index->hello().PHP_EOL;
