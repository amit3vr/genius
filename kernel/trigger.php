<?php namespace Brainiac\Trigger;

abstract class Trigger extends \Exception
{
    protected static $_lang;
    protected $_time;
    protected $_eid;

    public function __construct($eid, $header = null)
    {
        global $app;

        parent::__construct($eid);

        $this->_eid = $eid;
        $this->_time = date($app('system', 'date-format', 'log'));

        if(!isset(self::$_lang))
            self::$_lang = \Brainiac\Get::lang('errors');

        if(isset(self::$_lang[$eid]))
            $this->message = self::$_lang[$eid];

        if(!is_null($header))
            header($header);
    }

    public function getID()
    {
        return $this->_eid;
    }

    public function getDate()
    {
        return $this->_time;
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