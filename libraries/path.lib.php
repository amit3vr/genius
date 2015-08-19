<?php namespace Genius;

final class Path
{
    public static function module_file($name)
    {
        return BASE. "/modules/{$name}.module.php";
    }

    public static function lang_file($name = null)
    {
        global $app;

        if(is_null($app('system', 'language')))
            $lang = 'en-us';
        else
            $lang = $app('system', 'language');

        if(is_null($name))
            return BASE. "/lang/{$lang}/lang.php";
        else
            return BASE. "/lang/{$lang}/{$name}.lang.php";
    }

    public static function layout_file($name)
    {
        return BASE. "/template/{$name}.html";
    }
}