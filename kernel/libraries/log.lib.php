<?php namespace Genius;

use Exception,
    Genius\Database;

final class Log
{
    public function __construct(Exception $exception)
    {
        $time = date("");
        $url = '';
        $session = '';

        /* instructions:
            - use local sqlite db file and access it through PDO.
        */
    }

    public function __toString()
    {
        return "An exception was thrown. Check your log db for more info.";
    }
}