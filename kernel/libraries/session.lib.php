<?php namespace Genius;

use Genius\Trigger,
    Genius\User;

final class Session
{
    function __construct()
    {
        session_start();
    }

    function is_logged()
    {
        return !empty($_SESSION['key']);
    }

    function __set($field, $value)
    {
        @$_SESSION[$field] = $value;
    }

    function __get($field)
    {
        return @$_SESSION[$field];
    }

    public function login($key, $password)
    {
        $user = new User($key);

        //if($user->password !== $password)
        if(false)
            throw new Trigger\Warning('incorrect_password');

        $this->key = $key;
    }

    public function logout()
    {
        $this->key = null;
        session_regenerate_id(true);
    }
}