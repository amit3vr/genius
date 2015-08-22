<?php

/* importing the Genius environment */
require_once 'kernel/environment.php';

/* application core */
( new Genius\Application )->display_page(@$_GET['page'] ?: 'home');

?>