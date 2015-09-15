<?php namespace Genius;

use PDO,
    PDOStatement,
    PDOException;

final class Database extends PDO
{
    private $config;

    public function __construct($driver, Array $config)
    {
        global $app;

        $this->config = $config;

        try
        {
            switch ($driver)
            {
                case 'mysql':
                    $dsn_args['host'] = @$config['host'] ?: 'localhost';
                    $dsn_args['port'] = @$config['port'] ?: '3306';
                    $dsn_args['dbname'] = @$config['dbname'];
                    $dsn_args['charset'] = @$config['charset'] ?: 'utf8';

                    $dsn = 'mysql:';

                    foreach($dsn_args as $field => $value)
                        $dsn .= "{$field}={$value};";

                    parent::__construct($dsn,
                                        @$config['username'] ?: 'root',
                                        @$config['password'] ?: '');

                break;

                default:
                    throw new Trigger\Error('db_driver_not_supported');
            }
        }
        catch(PDOException $e)
        {
            throw new Trigger\Error('db_cant_connect');
        }
    }

    public function __invoke(...$tables)
    {
        foreach($tables as &$name)
        {
            $name = (@$this->config['tprefix'] ?: '') . $name;
        }

        return new DBTable($this, ...$tables);
    }
}

final class DBTable
{
    private $db;
    private $tables;

    public $fields;
    public $where;

    public function __construct(Database $db, ...$table_names)
    {
        $this->db = $db;
        $this->tables = $table_names;
        $this->where = [];
    }

    public function __set($field, $value)
    {
        $this->where[$field] = $value;

        return $this;
    }

    public function get_records($row_count = null, $offset = null)
    {
        $fields = empty($this->fields) ? '*' : implode(',', $this->fields);
        $query = "SELECT {$fields} FROM " . implode(',', $this->tables);

        if(!empty($this->where))
        {
            $query .= ' WHERE ';

            array_walk($this->where, function(&$value, $field)
            {
                $value = "{$field}='{$value}'";
            });

            $query .= implode(' OR ', $this->where);
        }

        if(!empty($row_count))
        {
            $query .= " LIMIT {$row_count}";

            if(!empty($offset))
                $query .= "OFFSET {$offset}";
        }

        return $this->db->query($query)->fetchAll();
    }

    /*
     * @var $where {array} a shorthand for setting up result filters.
     */
    public function get(Array $where = [])
    {
        foreach($where as $field => $value)
        {
            $this->{$field} = $value;
        }

        return reset($this->get_records(1));
    }
}

abstract class DBObject // ORM OBJECT
{
    const TABLE_NAME = '';
    const PRIMARY_KEY = 'id';
    const INDEXES = [];

    protected $details;

    protected function __construct($key)
    {
        global $app;

        $db = $app->database($this::TABLE_NAME);

        foreach($this::INDEXES as $field)
        {
            $db->{$field} = $key;
        }

        $this->details = $db->get();

        if(empty($this->details))
            throw new Trigger\Warning('db_object_not_found');
    }

    public function __get($field)
    {
        return @$this->details[$field];
    }

    public static function all(Array $where = [])
    {
        global $app;

        $class_name = get_called_class();

        $db = $app->database($class_name::TABLE_NAME);
        $db->fields = [$class_name::PRIMARY_KEY];

        foreach($where as $field => $value)
        {
            $db->$field = $value;
        }

        foreach($db->get_records() as $record)
        {
            $ret[] = new $class_name($record[$class_name::PRIMARY_KEY]);
        }

        return @$ret;
    }
}