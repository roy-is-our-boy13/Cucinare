<?php
    $theDataBase = mysqli_connect('localhost', 'root', '', 'Cuninare');
    checlingIfUsernamaeExist();
    checkingIfEmailAlreadyExist();
    savingData();
    
    function checlingIfUsernamaeExist()
    {
        if(isset($_POST['checkingUsername']))
        {
            $theUsername = $_POST['username'];
            $sql = "SLELECT * FROM user WHERE username='$theUsername'";
            $theResults = mysqli_query($theDataBase,sql);

            if(mysqli_num_rows($theResults) > 0)
            {
                echo"User has been taken.";
                echo "Create a differnt one.";
            }
           exit();
        }
    }
    
    function checkingIfEmailAlreadyExist()
    {
        if(isset($_POST['checkingEmail']))
        {
            $usersEmail = $_POST['email'];
            $sql = "SLELECT * FROM user WHERE email='$usersEmail'";
            $theResults = mysqli_query($theDataBase,sql);

            if(mysqli_num_rows($theResults) > 0)
            {
                echo"Email already exist.";
                echo "Please put a differnt emal in.";
            }
           exit();
        }
    }
    
    function savingData()
    {
        if(isset($_POST['save']))
        {
            $theUsername = $_POST['username'];
            $userEmail = $_POST['email'];
            $thePassword = $_POST['password'];
            $sql = "SELCT * FROM user WHERE username='$username'";
            $theResults = mysqli_query($theDataBase,sql);
            
            if(mysqli_num_rows($theResults) > 0)
            {
                echo "It exists";
                exit();
            }
            else
            {
                $query = "INSERT INTO account (username, email, password) 
  	       	VALUES ('$theUsername', '$userEmail', '".md5($thePassword)."')";
                $theResults = mysqli_query($theDataBase,sql);
                echo 'Saved!';
                exit();
            }
        }
    }
?>