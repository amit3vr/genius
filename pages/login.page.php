<?php namespace Genius\Pages;

use Genius,
    Genius\User,
    Genius\Layout;

final class Login extends Genius\Kernel\PageBase
{
    public function __construct()
    {
        parent::__construct('Login Page');
    }

    protected function generate()
    {
        $layout = new Layout('login.html');

        try
        {
            if (isset($_POST['key']) && isset($_POST['password']))
            {
                (new User($_POST['key']))->login($_POST['password']);
            }

            switch (@$_GET['do'])
            {
                case 'logout':
                    User::logout();
                    break;
            }

            $layout->error = null;
        }
        catch(Genius\Trigger\Warning $e)
        {
            $layout->error = (string) $e;
        }
        finally
        {
            return $layout->render();
        }
    }
}

?>