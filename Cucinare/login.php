
<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "", "Cuniare");
    checkingConnection($connection);
    login();

    $theEmail = $_POST["email"];

    $thePassword = $_POST["Password"];

    checkingConnection($connection);

    $sql = "select * from `account` where `email`='$theEmail' and `password`='$thePassword'";

    $restart = mysqli_query($connection, $sql);

    restarting($restart);

    mysqli_close($connection);  


   function restarting($restart)
   {
       if(mysqli_num_rows($restart)>0)
        {
          
            $_SESSION["email"] = $userEmail;
            
            include ('usersProfile.php');
        }
        else
        {
           
            die("Username does not exist. Try again.");
           
            include ('adminSingUp.php');
        }
   }  
            
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

    function login()
    {
        include('configure.php');
        if(isset($_POST['login']))
        {
            if(!empty($_POST['email']) || !empty($_POST['password']))
            {

                $theEmail = $_POST['email'];
                $thePassword = $_POST['password'];
                $myQuery = $theConnection->prepare("SLECT * FROM users WHERE username-:username");
                $myQuery -> bindParam("username",$theUsername,PDO::PARAm_STR);
                $myQuery -> execute();
                $theResult = $myQuery -> fetch(PDO::FETCH_ASSOC);

                $mySQL = " SLECT * FROM 'logn' WHERE 'usesername' = '$theUsername'";
                $query = mysqli_Query($connection, $mySQL);

                $anRowOfArrays = myqli_fetch_array($query);

                if(!$theResult)
                {
                    echo '<p class="error">The combination of the usersname password is not corrrect!</p>';
                }
                else
                {
                    if(password_verify($thePassword,$theResult))
                    {
                        $_SECCION['user_id'] = $theResult['id'];
                        echo '<p class="success">You are logged in to your files account!</p>';
                    }
                    else
                    {
                       echo '<p class="error">The combination of the usersname password is not corrrect!</p>';
                    }
                }
               
                while($anRowOfArrays)
                {
                  $usernameDatabase = $anRowOfArrays['username'];
                  $passwordDatabase = $anRowOfArrays['password'];

                  if($theUsername == $usernameDatabase && $thePassword == $passwordDatabase)
                  {
                      echo "<br><i><h2>Logged In has been Completed</h2></i><br >";
                        $_SESSION['username'] = $theUsername;
                  }
                  else
                  {
                      echo "<br><i><h2>Login has failed. Please try again. </h2></i><br>";
                  }
                }
            }
            else
            {

                die("One or both of the coloms have been left blank.");
            }
        }
    }    
        ?>
