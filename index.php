<?php

/* importing the Genius environment */
require_once 'kernel/environment.php';

/* application core */
( new Genius\Application )->display_page(@$_GET['page']);

/* footer */
echo nl2br("\n\nExecution time: " . Genius\Utilities::timer());

?>