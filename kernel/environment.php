<?php namespace Genius\Environment;

if(version_compare(PHP_VERSION, '5.6.0', '<'))
    die('Genius requires PHP version of atleast 5.6.0.');

/* Directories Paths */
define('BASE', dirname(__DIR__));

spl_autoload_register(function($class_name)
{
   switch($class_name)
   {
       case 'Genius\Application':
           return require_once 'app.php';

       case 'Genius\Kernel\PageBase':
           return require_once 'page.php';

       case 'Genius\Trigger\Error':
       case 'Genius\Trigger\Warning':
           return require_once 'trigger.php';

       default:
           $class_name = basename($class_name);
           $class_name = strtolower($class_name);

           return @include_once BASE. "/libraries/{$class_name}.lib.php";
   }
});

?>