<?php namespace Genius\Trigger;

use Genius\Get,
    Genius\Header;

abstract class Trigger extends \Exception
{
    protected static $lang;
    protected $time;
    protected $eid;

    public function __construct($eid, $http_code = null)
    {
        global $app;

        /* initialize */
        parent::__construct($eid);

        $this->eid = $eid;
        $this->time = date($app('system', 'date-format', 'log'));

        if(!isset(self::$lang))
            self::$lang = Get::lang('errors');

        if(isset(self::$lang[$eid]))
            $this->message = self::$lang[$eid];

        /* execute header code if given */
        Header::code($http_code);
    }

    public function getID()
    {
        return $this->eid;
    }

    public function getDate()
    {
        return $this->time;
    }
}

/* aka Full-screen message */
final class Error extends Trigger
{
    public function __toString()
    {
        $output = "";

        $output .= "<h4>{$this->getMessage()}</h4>";
        $output .= "Error Code: {$this->getID()}";
        $output .= "<br />";
        $output .= $this->getDate();

        return $output;
    }
}

/* aka not full screen message */
final class Warning extends Trigger
{
    public function __toString()
    {
        $output = "";

        $output .= "<h4>{$this->getMessage()}</h4>";
        $output .= "Warning Code: {$this->getID()}";

        return $output;
    }
}

?>