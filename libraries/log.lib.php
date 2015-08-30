<?php namespace Genius;

use Exception;

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
}