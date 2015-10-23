<?php namespace Genius;

/* Genius uses Smarty Template Engine to compile template files */
require_once 'Smarty/libs/Smarty.class.php';
use \Smarty;

class Layout
{
    private $path;
    private $engine;

    public function __construct($name, $type = 'html')
    {
        global $app;

        $this->path = Path::template("{$name}.smarty.{$type}");

        if(!file_exists($this->path))
            throw new Trigger\Error('template_not_found');

        $this->engine = new Smarty();

        $this->engine->setTemplateDir(Path::template());
        $this->engine->setCompileDir(Path::template('compiled/'));
        $this->engine->setCaching(false);

        $this->engine->registerClass('Utilities', '\Genius\Utilities');
        $this->engine->registerClass('Get', '\Genius\Get');
        $this->engine->registerClass('User', '\Genius\User');

        $this->engine->registerObject('user', $app->session->user);

        /* auto built components */
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
        return $this->engine->fetch($this->path, null, null, null, false);
    }

    public function __toString()
    {
        return $this->render();
    }
}