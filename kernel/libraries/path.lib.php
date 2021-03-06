<?php namespace Genius;

class Path
{
    public static function page_file($name)
    {
        $name = strtolower($name);

        return BASE. "/pages/{$name}.page.php";
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

    public static function template($name = '')
    {
        global $app;

        $dir = $app('system', 'template') ?: '';

        return BASE. "/templates/{$dir}/{$name}";
    }
}