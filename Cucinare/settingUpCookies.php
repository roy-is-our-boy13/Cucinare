<?php
    include('SignUp.php');

    $UsernamesCookie = $theUsername;
    $UsernamesEmail =  $theEmail;
    setcookie($UsernamesCookie ,  $UsernamesEmail, time() + (86400 * 30), "/"); // 86400 = 1 day

    if(!isset($_COOKIE[$cookie_name])) 
    {
      echo "the cookie named '".$UsernamesCookie. " has not set";
    
    } 
    else 
    {
      echo "Cookie '" . $UsernamesCookie . "' is set!<br>";
      echo "Value is: " . $_COOKIE[$UsernamesCookie];
    }

    enableCookie();
    
    function enableCookie()
    {
        if(count($_COOKIE) > 0)
        {
            echo "Cookies are enabled.";
        }
        else 
        {
        
            echo "Cookies are disabled.";
        }
    }
?>