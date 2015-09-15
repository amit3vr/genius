<?php namespace Genius;

use Genius\Database,
    Genius\DBObject;

class Event extends DBObject
{
    const TABLE_NAME = 'events';
    const PRIMARY_KEY = 'id';
    const INDEXES = ['id'];

    public function __construct($key)
    {
        parent::__construct($key);
    }
}