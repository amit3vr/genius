<?php namespace Genius\Kernel;

use Genius,
    Genius\Trigger;

abstract class PageBase
{
    private $_enable;

    protected $_title;
    protected $_visibility; # groups of authorization that can see this module.

    protected abstract function generate();

    protected function __construct($title, $enable = true)
    {
        $this->_title = $title;
        $this->_enable = $enable;
    }

    public function __invoke($attribute)
    {
        switch($attribute)
        {
            case 'is_enabled':
                return $this->_enable;

            case 'title':
                return $this->_title;
        }

        return null;
    }

    public function __toString()
    {
        try
        {
            return $this->generate();
        }
        catch(Trigger\Warning $e)
        {
            return (string) $e;
        }
    }
}

?>