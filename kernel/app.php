<?php namespace Brainiac;

final class Application
{
    #  _               _       _
    # | |__  _ __ __ _(_)_ __ (_) __ _  ___
    # | '_ \| '__/ _` | | '_ \| |/ _` |/ __|
    # | |_) | | | (_| | | | | | | (_| | (__
    # |_.__/|_|  \__,_|_|_| |_|_|\__,_|\___|

    const VERSION = 1.0;
    const LICENSE = "asdg3456sdfghsfgh43sdvsdlg23";

    private static $_config, $_nav;

    public function __construct()
    {
        if(file_exists(BASE . '/install'))
            Header::redirect('/install');

        if(isset($GLOBALS['app']))
            throw new Trigger\Error('app_already_init');
        else $GLOBALS['app'] = $this;

        if(file_exists(BASE . '/config.php'))
            self::$_config = require_once(BASE .'config.php');
        else throw new Trigger\Error('config_not_init');

        @date_default_timezone_set($this('system', 'timezone'));
    }

    public function display_page($page_name)
    {
        try
        {
            if($this('site', 'status') === false)
                throw new Trigger\Error('site_offline');

            $page_name = strtolower($page_name);

            echo Get::module($page_name);

            /* footer */
            echo "<br /><br /> <br />";
            echo "Execution time: " . Utilities::timer();
        }
        catch(Trigger\Error $e)
        {
            echo $e;
        }
        catch(Trigger\Warning $e)
        {
            echo $e;
        }
        catch(\Exception $e)
        {
            echo $e;
        }
    }

    public function __invoke(...$keys)
    {
        $conf = self::$_config;

        foreach ($keys as $key)
            @$conf = $conf[$key];

        return @$conf;
    }
}