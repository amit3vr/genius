<?php namespace Genius;

use PDO,
    PDOStatement,
    PDOException;

final class Database extends PDO
{
    public function __construct($driver = null, $args = null)
    {
        global $app;

        $arguments = [];

        try
        {
            switch ($driver ?: $app('db', 'default_driver'))
            {
                case 'mysql':
                    $mysql = $app('db', 'mysql');

                    $dsn_args = '';
                    $dsn_args .= "host={$mysql['host']};";
                    $dsn_args .= "port={$mysql['port']};";
                    $dsn_args .= "dbname={$mysql['dbname']};";

                    $arguments[] = "mysql:{$dsn_args}";
                    $arguments[] = $mysql['username'];
                    $arguments[] = $mysql['password'];

                    break;

                default:
                    throw new Trigger\Error('db_driver_not_supported');
            }

            parent::__construct(...$arguments);
        }
        catch(PDOException $e)
        {
            throw new Trigger\Error('db_cant_connect');
        }
    }

    public function __invoke($table_name)
    {
        return new DBTable($this, $table_name);
    }
}

final class DBTable
{
    private $_db;
    private $_name;

    public function __construct(Database $db, $t_name)
    {
        $this->_db = $db;
        $this->_name = $t_name;
    }

    public function get_records(Array $fields, Array $where)
    {
        $fields = empty($fields) ? '*' : implode(',', $fields);
        $query = "SELECT {$fields} FROM {$this->_name}";

        if(!empty($where))
        {
            $where_clause = " WHERE";

            foreach ($where as $field => $value)
            {
                $where_clause .= " {$field}='{$value}'";

                if(each($where))
                    $where_clause .= ' OR';
            }
         }

        // check for correct syntax
        $this->_db->prepare($query)->fetchAll();
    }

    public function search(Array $where)
    {
        // fetches only the first record found.
    }
}