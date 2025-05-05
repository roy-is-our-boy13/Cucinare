<?php
    session_start();
    if (isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        
        
        destroyTheSessionAndData();
        
        echo ("Welcome back $username.<br>
               
                Your username is '$username’ and your password is '$password'.");
    }
    else
    {
        echo "Please <a href='authenticate2.php'>click here</a> to log in.";
    }
    
    function destroyTheSessionAndData()
    {
        $_SESSION = array();
        setcookie(session_name(), '', time() - 2592000, '/');
        session_destroy();
    }
?>

