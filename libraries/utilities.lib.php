<?php namespace Brainiac;

final class Utilities
{
    public static function timer()
    {
        return (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]);
    }
}