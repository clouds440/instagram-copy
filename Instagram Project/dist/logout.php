<?php
    session_start();
    session_destroy();
    header('refresh:1;url=login.php');
    echo "<h1>Loging out...</h1>";
?>