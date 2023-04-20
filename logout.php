<?php
    session_start();
    session_unset();
    session_destroy();
    require_once('inc/function.php');
    redirect('index.php');
    exit();

?>
