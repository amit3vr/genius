<?php namespace Brainiac;

final class Get
{
    public static function lang($module = null)
    {
        global $app;

        if(is_null($app('system', 'language')))
            $lang = 'en-us';
        else
            $lang = $app('system', 'language');

        if(is_null($module))
            return @include_once LANG_PATH ."{$lang}/lang.php";
        else
            return @include_once LANG_PATH ."{$lang}/{$module}.lang.php";
    }


    public static function& module($module_name)
    {
        global $app;

        if(!array_key_exists($module_name, $app('site', 'pages')))
            throw new Trigger\Warning('module_not_init');

        $module_name = $app('site', 'pages', $module_name);
        $path = BASE . "modules/{$module_name}.module.php";

        if(file_exists($path))
            $module = include_once $path;
        else throw new Trigger\Error('module_file_not_found');

        if(!is_subclass_of($module, 'Brainiac\Kernel\Module'))
            throw new Trigger\Error('module_not_unified');

        return $module;
    }
}