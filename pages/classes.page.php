<?php namespace Genius\Pages;

use Genius,
    Genius\Layout;

final class Classes extends Genius\Kernel\PageBase
{
    public function __construct()
    {
        parent::__construct('Classes');
    }

    private function show_classroom($key)
    {
        $layout = new Layout('classroom.html');

        return;
    }

    private function show_class_list()
    {
        $layout = new Layout('classes.html');

        return;
    }

    public function generate()
    {
        if(isset($_GET['key']))
            return $this->show_classroom($_GET['key']);

        else return $this->show_class_list();
    }
}