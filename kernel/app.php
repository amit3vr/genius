<?php namespace Genius;

final class Application
{
    #  _               _       _
    # | |__  _ __ __ _(_)_ __ (_) __ _  ___
    # | '_ \| '__/ _` | | '_ \| |/ _` |/ __|
    # | |_) | | | (_| | | | | | | (_| | (__
    # |_.__/|_|  \__,_|_|_| |_|_|\__,_|\___|

    const VERSION = '1.0.0-DEV';
    const LICENSE = 'asdg3456sdfghsfgh43sdvsdlg23';

    private $config;
    private $db;

    public $session;

    public function __construct()
    {
        if(file_exists(BASE. '/install'))
            Header::redirect('/install');

        if(!isset($GLOBALS['app']))
            $GLOBALS['app'] = $this;
        else throw new Trigger\Error('app_already_init');

        if(file_exists(BASE . '/config.php'))
            Utilities::init($this->config, require_once(BASE. '/config.php'));
        else throw new Trigger\Error('config_not_init');

        @date_default_timezone_set($this('system', 'timezone'));

        $this->db = new Database('mysql', $this('mysql'));
        $this->session = new Session();
    }

    public function __invoke(...$keys)
    {
        $conf = $this->config;

        foreach ($keys as $key)
            @$conf = $conf[$key];

        return @$conf;
    }

    public function database($table = null)
    {
        if(!empty($table) && is_string($table))
        {
            $db = $this->db;
            return $db($table);
        }

        return $this->db;
    }

    public function display($page_name)
    {
        try
        {
            if($this('site', 'status') === false)
                throw new Trigger\Error('site_offline');

            /* get page */
            $page_name = strtolower($page_name);
            $page_name = ucfirst($page_name);

            $page = Get::page($page_name);

            /* generate layout */
            $layout = new Layout('overall-site-skin.html');

            $layout->title = $page->title;
            $layout->content = (string) $page;
            $layout->user = $this->session->user;

            echo $layout;
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
}

?>