<?php namespace Genius;

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

    function __set($field, $value)
    {
        @$_SESSION[$field] = $value;
    }

    function __get($field)
    {
        return @$_SESSION[$field];
    }
}