<?php
    require_once 'login.php';
    
    $connection = new mysqli($username, $password, $databaseName);
    
    if($connection -> connect_error)
    {
        die($connection->connect_error);
    }
    
    if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
    {
        $usernameTemp = mysql_entitles_fix_string();
        
        $passwordTemp = mysql_entitles_fix_string($connection, $_SERVER['PHP_AUTH_PW']);
        
        $myQuery = "SELECT * FROM users WHERE username = '$usernameTemp'";
        
        $theResult = $connection->query($myQuery);
        
        if(!$theResult)
        {
            die($connection->error);
        }
        else if($thrResults -> num_rows)
        {
            $theRow = $theResults -> fectch_array(MYSQLI_NUM);
            
            $theResult -> close();
            
            $firstSalt = "";
            $secondSalt = "";
            
            $theToken = hash();
            
            if($theToken == $row[3])
            {
                echo "$row[0]$row[1]: Hi $row[0], you are now logged in as '$row[2]]'";
            }
            else
            {
                die("This is an Invalid username and password combination.");
            }
        }
        else 
        {
            die("This is an Invalid username and password combination");
        }
    }
    else
    {
        die("Please enter your username and password");
    }
    $connection -> close();
    
    function mysql_entitles_fix_string($connection, $string)
    {
        return (htmlentities(mysql_fix_string($connection, $string)));
    }
    
    function mysql_fix_string($connection, $string)
    {
        if(get_magic_quotes_gpc())
        {
            $string = stripslashes($string);
        }
        return $connection -> real_escape_string($string);
    }
?>

