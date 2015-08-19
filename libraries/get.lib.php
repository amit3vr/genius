<?php namespace Genius;

final class Get
{
    public static function lang($module = null)
    {
        return @include_once Path::lang_file($module);
    }

    public static function& module($module_name)
    {
        global $app;

        if(!array_key_exists($module_name, $app('site', 'pages')))
            throw new Trigger\Warning('module_not_init');

        $module_name = $app('site', 'pages', $module_name);
        $path = Path::module_file($module_name);

        if(file_exists($path))
        {
            include_once $path;

            $module_name = "Genius\\Modules\\$module_name";
            $module = new $module_name;
        }
        else throw new Trigger\Error('module_file_not_found');

        if(!is_subclass_of($module, 'Genius\Kernel\ModuleBase'))
            throw new Trigger\Error('module_not_unified');

        return $module;
    }
}