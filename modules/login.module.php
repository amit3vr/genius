<?php namespace Genius\Modules;

use Genius;

final class Login extends Genius\Kernel\ModuleBase
{
    public function __construct()
    {
        parent::__construct('Login Page');
    }

    protected function generate()
    {
        $layout = new Genius\Layout('login');
    }
}

?>