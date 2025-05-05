<?php
    require_once 'login.php';
    
    $theConnection = new mysqli($hn, $userName, $thwPassword, $theDataBase);
    
    if($theConnection->connect_error) 
    {   
        die($theConnection->connect_error);
    }
    
    if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']) ) 
    {
        $userNameTemp = mysql_entities_fix_string($theConnection, $_SERVER['PHP_AUTH_USER']);
        $passwordTemp = mysql_entities_fix_string($theConnection, $_SERVER['PHP_AUTH_PW']);
        
        $query = "SELECT * FROM users WHERE username='$userNameTemp'";
        $result = $connection->query($query); 
        
        $resultsFromARow = $result->num_rows;
        $connectionError = $connection->error;
        
        if (!$result) 
        {
            die($connectionError);
        }
        else if ($resultsFromARow ) 
        {
            $row = $result->fetch_array(MYSQLI_NUM);
            $result->close();
            $salt1 = "qm&h*"; 
            $salt2 = "pg!@";
            $token = hash('ripemd128', "$salt1$pw_temp$salt2");
            
            if ($token == $row[3]) 
            {
                session_start();
                
                $_SESSION['username'] = $userNameTemp;
                $_SESSION['password'] = $passwordTemp;
                $_SESSION['forename'] = $row[0];
                $_SESSION['surname'] = $row[1];
                
                echo "$row[0] $row[1] : Hi $row[0], you are now logged in as '$row[2]'";
                die ("<p>"
                        . "<a href=continuation.php> "
                            . "Click here to continue"
                        . "</a>"
                     . "</p>");
             }
             else
             {
                 die("Invalid username/password combination");
             }
        }
        else
        {
             die("Invalid username/password combination");
        }
    }
    else
    {
        header('WWW-Authenticate: Basic realm="Restricted Section"');
        header('HTTP/1.0 401 Unauthorized');
        die ("Please enter your username and password");
    }
        
        
    $theConnection->close();
    
    function mysql_entities_fix_string($theConnection, $string)
    {
        return htmlentities(mysql_fix_string($theConnection, $string));
    }
    
    function mysql_fix_string($theConnection, $string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $theConnection->real_escape_string($string);
    }
?>

