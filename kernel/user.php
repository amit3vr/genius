<?php namespace Genius\Kernel;

class User
{
    const KEY_COLUMNS = array('ID', 'email');

    protected $_key;

    public function __construct($key)
    {
        $this->_key = $key;
    }

    public function verify_password($password)
    {

    }
}

?>