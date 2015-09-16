<?php

try
{
    /* import the Genius environment */
    require_once 'kernel/environment.php';

    /* start new instance */
    $app = new Genius\Application;

    /* display page */
    if($app->session->is_logged())
        $app->display(@$_GET['act'] ?: 'feed');
    else
        $app->display('login');
}
catch(Exception $e)
{
    echo (new Genius\Log($e));
}

?>