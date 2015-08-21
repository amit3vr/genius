<?php namespace Genius;

/* Genius uses Smarty Template Engine to compile template files */
require_once 'Smarty/libs/Smarty.class.php';
use \Smarty;

final class Layout
{
    private $_path;
    private $_engine;
    private $_lang;
    private $_components;

    public function __construct($name)
    {
        $this->_path = Path::layout_file($name);

        if(!file_exists($this->_path))
            throw new Trigger\Warning('template_not_found');

        $this->_engine = new Smarty();
        $this->_engine->caching = 0;

        $this->_lang = null;
        $this->_components = array();
    }

    public function set_language($lang)
    {
        $this->_lang = Get::lang($lang);
    }

    public function add_component($name, $value)
    {
        $this->_engine->assign($name, $value);
    }

    public function __set($name, $value)
    {
        $this->add_component($name, $value);
    }

    public function render()
    {
        return $this->_engine->fetch($this->_path, null, null, null, false);
    }

    public function __toString()
    {
        return $this->render();
    }
}