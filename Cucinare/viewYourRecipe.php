<?php
    session_start();
    $myConnection = mysqli_connect("localhost","root","","Cucinare");
    checkingIfConnectionWorks($myConnection);
    $usersEmail = $_SESSION["email"];
    $sql = "select * from `info` where `email`='$usersEmail' ";
    $restart = mysqli_query($myConnection,$sql);
    $numberOfRows = mysqli_num_rows($restart);
   
    if($numberOfRows > 0)
    {
        $willShow = mysqli_fetch_assoc($restart);
       
        showing($willShow); 
    }
    else
    {
       
        die("There is not content.");
    }
    
    mysqli_close($$myConnection);
    
    function checkingIfConnectionWorks($myConnection)
    {
        
        if($myConnection)
        {
           
            echo"Connection is working";
        }
        else 
        
        if(!$myConnection)
        {
            
            die("Connection not working. ".mysqli_connect_error());
        }
        else
        {
           
            die("Invalid Connection.");
        }
    }
   
    function showing($willShow)
    {
        while($willShow)
        {
            
            echo ($willShow["docname"]."\n".$willShow["content"]);
        }
    }
?>