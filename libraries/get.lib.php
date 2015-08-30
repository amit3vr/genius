<?php namespace Genius;

final class Get
{
    public static function lang($module = null)
    {
        if(file_exists(Path::lang_file($module)))
            return @include_once Path::lang_file($module);

        else return [];
    }

    public static function& page($name)
    {
        $source_path = Path::page_file($name);

        if(!file_exists($source_path))
            throw new Trigger\Error('page_not_found', 404);

        include_once $source_path;

        $name = "Genius\\Pages\\$name";
        $page = new $name;

        if(!is_subclass_of($page, 'Genius\Kernel\PageBase'))
            throw new Trigger\Error('page_not_unified');

        if($page('is_enabled') === false)
            throw new Trigger\Error('page_not_init');

        return $page;
    }
}