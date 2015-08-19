<?php namespace Genius\Modules;

use Genius;

final class Home extends Genius\Kernel\ModuleBase
{
    public function __construct()
    {
        parent::__construct('Home Page');
    }

    protected function generate()
    {
        $layout = new Genius\Layout('layout');

        $layout->title = $this->_title;
        $layout->rll = "Watch out bithces.";

        return $layout->render();
    }
}

?>