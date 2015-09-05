<?php namespace Genius;

use Genius\Kernel\User;

final class Session
{
    private static $user = null;

    function __construct()
    {
        session_start();
    }

    function is_logged()
    {
        return !empty($_SESSION['user']);
    }

    function __set($name, $value)
    {
        @$_SESSION[$name] = $value;
    }

    function __get($name)
    {
        return @$_SESSION[$name];
    }
}