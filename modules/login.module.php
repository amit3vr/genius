<?php namespace Brainiac;

final class Login extends Kernel\Module
{
    public function __construct()
    {
        $this->_title = 'Login Page';

        parent::__construct('login', 'login');
    }
}

return new Login();
?>