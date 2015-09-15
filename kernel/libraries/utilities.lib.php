<?php namespace Genius;

class Utilities
{
    public static function timer()
    {
        return (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]);
    }

    /* Credit: Glavic @ stackoverflow.com/questions/1416697/converting-timestamp-to-time-ago-in-php-e-g-1-day-ago-2-days-ago */
    function time_elapsed($datetime, $level = 1)
    {
        $now = new \DateTime;
        $ago = new \DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v)
        {
            if ($diff->$k)
            {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            }
            else
            {
                unset($string[$k]);
            }
        }

        $string = array_slice($string, 0, $level);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    public static function init(&$var, $value)
    {
        if(!isset($var) || empty($var))
            $var = $value;
    }
}