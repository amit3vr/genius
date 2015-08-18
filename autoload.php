<?php namespace Brainiac\AutoLoad;

/* Directories Paths */
define('BASE', __DIR__ . '/');

/* */
define('KERNEL_PATH', BASE . 'kernel/');
define('LIB_PATH', BASE . 'libraries/');
define('LANG_PATH',  BASE . 'lang/');

spl_autoload_register(function($class_name)
{
   switch($class_name)
   {
       case 'Brainiac\Application':
           return require_once KERNEL_PATH . 'app.php';

       case 'Brainiac\Kernel\Module':
           return require_once KERNEL_PATH . 'module.php';

       case 'Brainiac\Trigger\Error':
       case 'Brainiac\Trigger\Warning':
           return require_once KERNEL_PATH . 'trigger.php';

       default:
           $class_name = basename($class_name);
           $class_name = strtolower($class_name);

           return @include_once LIB_PATH . "{$class_name}.lib.php";
   }
});

?>