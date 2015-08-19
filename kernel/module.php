<?php namespace Genius\Kernel;

use Genius,
    Genius\Trigger;

abstract class ModuleBase
{
    protected $_title;
    protected $_security; # groups of authorization that can see this module.

    protected function __construct($title = null)
    {
        $this->_title = $title;
    }

    protected abstract function generate();

    public function __toString()
    {
        return $this->generate();
    }
}

?>