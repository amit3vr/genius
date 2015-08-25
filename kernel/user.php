<?php

class User
{
    protected $_key;

    function __construct($username)
    {
        $this->_key = $username;
    }
}

?>