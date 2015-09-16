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

    public static function my($field)
    {
        global $app;

        if(is_bool($field))
            return ($app->session->is_logged() === $field);

        if($app->session->is_logged())
            return @(new User($app->session->key))->{$field};
        else
            return '';
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
}

?>