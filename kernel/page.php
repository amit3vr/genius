<?php namespace Genius\Kernel;

use Genius,
    Genius\Trigger;

abstract class PageBase
{
    public $title;

    protected function __construct($title, $temp_disable = false)
    {
        $this->title = $title;

        if($temp_disable)
            throw new Trigger\Warning('page_not_init');
    }

    public abstract function generate();
}

?>