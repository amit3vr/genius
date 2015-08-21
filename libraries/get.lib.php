<?php namespace Genius;

final class Get
{
    public static function lang($module = null)
    {
        return @include_once Path::lang_file($module);
    }

    public static function& page($name)
    {
        global $app;

        if(!array_key_exists($name, $app('site', 'pages')))
            throw new Trigger\Error('page_not_found', 404);

        $name = $app('site', 'pages', $name);
        $path = Path::page_file($name);

        if(file_exists($path))
        {
            include_once $path;

            $name = "Genius\\Pages\\$name";
            $page = new $name;
        }
        else throw new Trigger\Error('module_not_init');

        if(!is_subclass_of($page, 'Genius\Kernel\PageBase'))
            throw new Trigger\Error('module_not_unified');

        return $page;
    }
}