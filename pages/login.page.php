<?php namespace Genius\Pages;

use Genius,
    Genius\Kernel\PageBase,
    Genius\Kernel\User,
    Genius\Layout;

final class Login extends PageBase
{
    public function __construct()
    {
        parent::__construct('Login Page');
    }

    protected function generate()
    {
        if(isset($_POST['username']) && isset($_POST['password']))
            $this->signin($_POST['username'], $_POST['password']);

        return 'hi';
    }

    private function signin($key, $password)
    {
        global $app;

        $app->database->query('');
    }
}

?>