<?php namespace Genius\Pages;

use Genius,
    Genius\Trigger,
    Genius\Layout;

final class Login extends Genius\Kernel\PageBase
{
    public function __construct()
    {
        parent::__construct('Login Page');
    }

    protected function generate()
    {
        global $app;

        $layout = new Layout('login.html');

        try
        {
            if (isset($_POST['key']) && isset($_POST['password']))
            {
                $app->session->login($_POST['key'], $_POST['password']);
            }

            $layout->error = null;
        }
        catch(Genius\Trigger\Warning $e)
        {
            $layout->error = (string) $e;
        }

        return $layout->render();
    }
}

?>