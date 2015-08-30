<?php namespace Genius;

final class Application
{
    #  _               _       _
    # | |__  _ __ __ _(_)_ __ (_) __ _  ___
    # | '_ \| '__/ _` | | '_ \| |/ _` |/ __|
    # | |_) | | | (_| | | | | | | (_| | (__
    # |_.__/|_|  \__,_|_|_| |_|_|\__,_|\___|

    const VERSION = 1.0;
    const LICENSE = "asdg3456sdfghsfgh43sdvsdlg23";

    private $_config;
    private $_nav;

    public $session = null;
    public $database = null;

    public function __construct()
    {
        if(file_exists(BASE. '/install'))
            Header::redirect('/install');

        if(!isset($GLOBALS['app']))
            $GLOBALS['app'] = $this;
        else throw new Trigger\Error('app_already_init');

        if(file_exists(BASE . '/config.php'))
            Utilities::init($this->_config, require_once(BASE. '/config.php'));
        else throw new Trigger\Error('config_not_init');

        @date_default_timezone_set($this('system', 'timezone'));

        $this->session = new Session();
        $this->database = new Database();
    }

    public function display_page($page_name)
    {
        try
        {
            if($this('site', 'status') === false)
                throw new Trigger\Error('site_offline');

            /* get page */
            if(!$this->session->is_logged())
            {
                $page_name = 'login';
            }
            else
            {
                $page_name = strtolower($page_name);
                $page_name = ucfirst($page_name);
            }

            $page = Get::page($page_name);

            /* generate layout */
            $layout = new Layout('skin.html');

            $layout->title = $page('title');
            $layout->content = (string) $page;
            $layout->exec_timer = Utilities::timer();

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

    public function __invoke(...$keys)
    {
        $conf = $this->_config;

        foreach ($keys as $key)
            @$conf = $conf[$key];

        return @$conf;
    }
}

?>