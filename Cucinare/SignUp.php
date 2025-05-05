<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "", "Cucinare");
    checkingConnection($connection);
    userSigningUp();

    $theUsername = $_POST['username'];

    $theEmail = $_POST['email'];

    $thePassword = $_POST['password'];

    checkingConnection($connection);

    $sql = "INSERT INTO `account`(`email`, `username`, `password`) VALUES "
        . "('$theEmail','$theUsername','$thePassword')";

    mysqli_query($connection, $sql);

    mysqli_close($connection);

    include('SignUpPage.php');

    function checkingConnection($connect)
    {
        if($connect)
        {
            echo "Connection is working";
        }
       else if(!$connec)
       {

            die("error".mysqli_error());
        }
        else
        {
            die("Invalid Connection");
        }
    }

    function userSigningUp()
    {
        inlcude('configuring.php');
        if(isset($_POST['singUp']))
        {
            $theUsername = $_POST['username'];
            $theEmail = $_POST['email'];
            $thePassword = $_POST['password'];
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);
            $myQuery = $theConnection->prepare("SLECT* FROM users WHERE email=:email");
            $myQuery->bindParam('email',$email, PDO::PARAM_STR);
            $myQuery->execute();

            if($emp_email == "") 
            {
                $errorEmail=  "<span class='error'>Please enter your email</span>"; 
            } 

            else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $theEmail))
            {
                $errorEmail= "<span class='error'>Please enter valide email, like your@abc.com</span>";
            }

            elseif($theUsername == "")
            {
                $errorUsername =  "<span class='error'>Please enter uername.</span>";
            }

            elseif(strlen($theUsername)<5)
            {
                $errorUsername =  "<span class='error'>Username should be at least five characters.</span>";
            }

            elseif($thePassword == "")
            {
                $error_password=  "<span class='error'>Please enter password</span>";
            }

            elseif($confirm == "")
            {
                $error_confirm=  "<span class='error'>Please enter confirm password</span>";
            }

            elseif($password != $confirm) 
            {
                $error_confirm=  "<span class='error'>Password and confirm password does not match</span>";
            }


            if($myQuery -> rowCont() > 0)
            {
                echo '<P class = "error">The email address that you entered in has already been registered.</p>';
                echo '<p class = "error">Plase Try again with a different email.</p>';
            }

            if(!empty($theUsername) && !empty($theEmail) && !empty($thePassword) || $myQuery -> rowCount() == 0)
            {
                $myQuery = $myConnection -> prepare("INSET INTO users(username, password, email) VALUES (:username, :password_hasg,:email)");
                $myQuery -> bindParam("username", $theUsername, PDO::PARAM_STR);
                $myQuery -> bindParam("password_hash", $passwordHash, PDO::PARAM_STR);
                $myQuery -> bindParam("email", $theEmail, PDO::PARAM_STR);
                $theResults = $myQuery -> execute();

                if($theResults)
                {
                    echo '<p class = "success">Your Registration is Complete!</p>';
                }
                else
                {
                     echo '<p class = "error">Invalid Registration</p>';
                }
            }
        }
    }
?>
