<?php
        session_start();
        $connection = mysqli_connect("localhost", "root", "", "AuthenticationIsTheKey");
        checkingConnection($connection);
        logout();
        
        function checkingConnection($connect)
        {
            if($connection)
            {
               echo "Connection is working";
            }
            else if(!$connection)
            {
                die("error".mysqli_error());
            }
            else
            {
                die("Invlid Connection");
            }
        }
        
        function logout()
        {
            if(isset($_POST['logingOut']))
            {
                session_unset($_SESSION['username']);
                session_destry();
                header("location: UserProfile.php");
            }  
        }
?>