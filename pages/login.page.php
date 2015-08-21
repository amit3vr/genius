<?php namespace Genius\Pages;

use Genius,
    Genius\Layout;

final class Login extends Genius\Kernel\PageBase
{
    public function __construct()
    {
        parent::__construct('Login Page');
    }

    protected function generate()
    {
        $layout = new Layout('login');
        return $layout;
    }
}

?>