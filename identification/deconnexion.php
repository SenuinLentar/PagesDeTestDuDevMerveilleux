<?php
    session_start();
    session_destroy();
    header('Location: ../Hello.php');
    exit();
?>
