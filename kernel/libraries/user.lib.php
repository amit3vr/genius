<?php namespace Genius;

use Genius\Trigger\Warning;

class User
{
    const KEY_COLUMNS = array('id', 'username', 'email');

    protected $profile = false;

    public function __construct($key)
    {
        global $app;

        $db = $app->database;
        $where = [];

        foreach(self::KEY_COLUMNS as $field)
        {
            $where[$field] = $key;
        }

        $this->profile = $db('users')->get($where);

        if(empty($this->profile))
            throw new Warning('user_not_exist');
    }

    public function login($password)
    {
        global $app;

        $app->session->user = $this;
        return true;
    }

    public static function logout()
    {
        global $app;

        $app->session->user = null;
    }
}

?>