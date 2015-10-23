<?php namespace Genius\Pages;

use Genius,
    Genius\User,
    Genius\Trigger,
    Genius\Layout,
    Genius\Header;

final class Login extends Genius\Kernel\PageBase
{
    public function __construct()
    {
        parent::__construct('Login Page');
    }

    private function logout()
    {
        global $app;

        if(User::my(true))
        {
            $app->session->logout();

            Header::redirect('/');
        }
    }

    private function login()
    {
        global $app;

        if(User::my(true))
        {
            Header::redirect('/');
            return '';
        }

        $layout = new Layout('login');

        try
        {
            if (isset($_POST['key']) &&
                isset($_POST['password']))
            {
                $app->session->login($_POST['key'], $_POST['password']);
                Header::redirect('/');
            }

            $layout->error = null;
        }
        catch(Trigger\Warning $e)
        {
            $layout->error = (string) $e;
        }

        return $layout->render();
    }

    public function generate()
    {
        switch(@$_GET['do'])
        {
            case 'logout':
                $this->logout();
                break;

            default:
                return $this->login();
        }

        return '';
    }
}

?>