<?php namespace Genius;

final class Header
{
    public static function redirect($dir)
    {
        header("Location: {$dir}");
        exit;
    }
}