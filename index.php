<?php namespace Brainiac;

/* must be included */
require_once 'autoload.php';

/* application core */
( new Application() )->display_page(@$_GET['do']);

?>