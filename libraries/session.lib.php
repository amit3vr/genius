<?php namespace Genius;

use Genius\Kernel\User;

final class Session
{
    private static $_user = null;

    function __construct()
    {
        session_start();
    }

    function set_user(User &$user)
    {
        self::$_user = $user;
    }

    function get_user()
    {
        return self::$_user;
    }

    function is_logged()
    {
        return !is_null(self::$_user);
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