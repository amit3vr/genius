<?php namespace Genius\Pages;

use Genius,
    Genius\Layout;

final class Home extends Genius\Kernel\PageBase
{
    public function __construct()
    {
        parent::__construct('Home Page');
    }

    protected function generate()
    {
        return 'hi';
    }
}

?>