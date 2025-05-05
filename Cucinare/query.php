<?php

    require_once 'login.php';
    
    $theConnection = new mysqli($local,$userName,$password,$database);
    
    if($theConnection -> connect_error)    
    {
        die($theConnection -> connect_error);
    }
    
    $query = "SLECT * FROM classic";
    $theResults = $theConnection -> query($query);
    
    if( !$theResults)
    {
        die($theConnection -> error);
    }
    
    $theRows = $theResults -> num_rows;
?>

