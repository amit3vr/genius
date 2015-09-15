<?php namespace Genius;

use Genius\Trigger\Warning,
    Genius\Database,
    Genius\DBObject;

class User extends DBObject
{
    const TABLE_NAME = 'users';
    const PRIMARY_KEY = 'id';
    const INDEXES = array('username', 'email');

    public function __construct($key)
    {
        parent::__construct($key);

        $this->fullname = "{$this->first_name} {$this->last_name}";
    }

    public static function by_id($id)
    {
        global $app;

        if(is_numeric($id))
        {
            $key = $app->database(self::TABLE_NAME)->get(['id' => $id]);
            $key = $key['username'];

            return new User($key);
        }

        else return false;
    }

    public function classrooms($class_key = null)
    {
        global $app;

        $db = $app->database;
        $db('class-members')->get(['class-key' => $class_key]);
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