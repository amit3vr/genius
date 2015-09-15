<?php namespace Genius;

/* Genius uses Smarty Template Engine to compile template files */
require_once 'Smarty/libs/Smarty.class.php';
use \Smarty;

class Layout
{
    private $path;
    private $engine;

    public function __construct($name)
    {
        global $app;

        $this->path = Path::layout_file($name);

        if(!file_exists($this->path))
            throw new Trigger\Warning('template_not_found');

        $this->engine = new Smarty();
        $this->engine->caching = 0;

        $this->engine->registerClass('Utilities', '\Genius\Utilities');
        $this->engine->registerClass('Get', '\Genius\Get');
        $this->engine->registerClass('Date', '\DateTime');

        /* auto built components */
        $this->globals = ['user' => $app->session->user];
        $this->site = $app('site');
        $this->webmaster = $app('webmaster');
    }

    public function set_language($lang)
    {
        $this->lang = Get::lang($lang);
    }

    public function add_meta()
    {

    }

    public function add_css_style()
    {

    }

    public function __set($name, $value)
    {
        $this->engine->assign($name, $value);
    }

    public function render()
    {
        $this->exec_timer = Utilities::timer();

        return $this->engine->fetch($this->path, null, null, null, false);
    }

    public function __toString()
    {
        return $this->render();
    }
}