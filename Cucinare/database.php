<?php

    require_once 'login.php';
    
    $theConnection = new mysqli();
    
    if($theConnection -> connect_error)    
    {
        die($theConnection -> connect_error);
    }
?>

