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
                    $dsn_args .= 'charset=utf8;';

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
    private $db;
    private $name;

    public function __construct(Database $db, $t_name)
    {
        global $app;

        $this->db = $db;
        $this->name = ($app('db', 'table_prefix') ?: '') . $t_name;
    }

    public function get_records(Array $fields = null, Array $where = null, Array $limit = null)
    {
        $fields = empty($fields) ? '*' : implode(',', $fields);
        $query = "SELECT {$fields} FROM {$this->name}";

        if(!empty($where))
        {
            $query .= ' WHERE ';

            array_walk($where, function(&$value, $field)
            {
                $value = "{$field}='{$value}'";
            });

            $query .= implode(' OR ', $where);
        }

        if(!empty($limit))
        {
            $query .= ' LIMIT ';
            $query .= implode(',', $limit);
        }

        return $this->db->query($query)->fetchAll();
    }

    public function get(Array $where)
    {
        return reset($this->get_records([], $where, [1]));
    }
}