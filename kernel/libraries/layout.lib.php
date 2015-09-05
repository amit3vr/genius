<?php namespace Genius;

/* Genius uses Smarty Template Engine to compile template files */
require_once 'Smarty/libs/Smarty.class.php';
use \Smarty;

final class Layout
{
    private $path;
    private $engine;
    private $lang;
    private $components;

    public function __construct($name)
    {
        $this->path = Path::layout_file($name);

        if(!file_exists($this->path))
            throw new Trigger\Warning('template_not_found');

        $this->engine = new Smarty();
        $this->engine->caching = 0;

        $this->lang = null;
        $this->components = array();
    }

    public function set_language($lang)
    {
        $this->lang = Get::lang($lang);
    }

    public function add_component($name, $value)
    {
        $this->engine->assign($name, $value);
    }

    public function __set($name, $value)
    {
        $this->add_component($name, $value);
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