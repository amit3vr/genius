<?php namespace Genius;

final class Utilities
{
    public static function timer()
    {
        return (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]);
    }
}