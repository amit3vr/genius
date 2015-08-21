<?php namespace Genius\Kernel;

use Genius,
    Genius\Trigger;

abstract class PageBase
{
    protected $_title;
    protected $_visibility; # groups of authorization that can see this module.

    protected function __construct($title = null)
    {
        $this->_title = $title;
    }

    public function __invoke($attribute)
    {
        switch($attribute)
        {
            case 'title':
                return $this->_title;
        }

        return null;
    }

    protected abstract function generate();

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