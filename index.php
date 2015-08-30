<?php

try
{
    /* importing the Genius environment */
    require_once 'kernel/environment.php';

    /* display page */
    (new Genius\Application)->display_page(@$_GET['page'] ?: 'home');
}
catch(Exception $e)
{
    echo $e;
    new Genius\Log($e);
}

?>