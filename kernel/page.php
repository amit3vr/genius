<?php namespace Genius\Kernel;

use Genius,
    Genius\Trigger;

abstract class PageBase
{
    private $enable;

    public $title;

    protected abstract function generate();

    protected function __construct($title, $enable = true)
    {
        $this->title = $title;
        $this->enable = $enable;
    }

    public function __toString()
    {
        try
        {
            if($this->enable === false)
            {
                throw new Trigger\Warning('page_not_init');

            }
            else
            {
                return $this->generate();
            }
        }
        catch(Trigger\Warning $e)
        {
            return (string) $e;
        }
    }
}

?>