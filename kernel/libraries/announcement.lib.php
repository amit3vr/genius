<?php namespace Genius;

use Genius\Database,
    Genius\DBObject,
    Genius\User;

class Announcement extends DBObject
{
    const TABLE_NAME = 'announcements';
    const PRIMARY_KEY = 'id';
    const INDEXES = ['id'];

    public function __construct($key)
    {
        parent::__construct($key);

        $this->details['author'] = empty($this->details['author']) ? false : User::by_id($this->details['author']);
    }
}