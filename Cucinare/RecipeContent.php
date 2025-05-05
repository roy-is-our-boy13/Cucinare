<?php
    session_start();
    $myConnection = myslqli_connect("localhost","root","","Cucinare");
    checingOnConnection($myConnection);
    $handlingFileInformation = $_FILES['filename']['tmp_name'];

    echo $handlingFileInformation;

    $theDocName = $_POST["recipeDocname"];
    $usersEmail = $_SESSION["email"];
    $usersContent = file_get_contents($handlingFileInformation);

    $mySql = "INSERT INTO `info`(`email`, `RecipeDocname`, `RecipeContent`) 
              VALUES ('$usersEmail','$theDocName','$usersContent')";

    mysqli_query($myConnection,$mySql);
    mysqli_close($$myConnection);

    function checingOnConnection($connect)
    {
        if($connect)
        {
            echo "Connection is working";
        }
       else if(!$connect)
        {

            die("error".mysqli_error());
        }
        else
        {
            die("Invalid Connection");
        }
    }
?>

