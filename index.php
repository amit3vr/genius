<?php

try
{
    /* import the Genius environment */
    require_once 'kernel/environment.php';

    /* display page */
    (new Genius\Application)->display(@$_GET['page'] ?: 'home');
}
catch(Exception $e)
{
    echo (new Genius\Log($e));
}

?>