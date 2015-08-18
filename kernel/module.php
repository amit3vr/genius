<?php namespace Brainiac\Kernel;

use Brainiac\Trigger;

abstract class Module
{
    private $_lang;
    private $_template;

    protected $_is_active = true;
    protected $_title;
    protected $_security; # groups of authorization that can see this module.

    protected function __construct($template, $lang)
    {
        if(!$this->_is_active)
            throw new Trigger\Warning("Unable to load.");

        if(!is_null($template))
            $this->_template = \Brainiac\Get::lang($template);

        if(!is_null($lang))
            $this->_lang = \Brainiac\Get::lang($lang);
    }

    private function generate_page()
    {
        return "hi";
    }

    protected function lang($key)
    {
        if(isset($this->_lang[$key]))
            return $this->_lang[$key];

        else return "'{$key}'";
    }

    public function __toString()
    {
        return $this->generate_page();
    }
}

?>