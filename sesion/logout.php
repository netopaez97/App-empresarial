<?php
   	session_start(); 
    error_reporting(E_ALL ^ E_NOTICE);

    session_destroy();

    header("Location: ../index.php")
?>