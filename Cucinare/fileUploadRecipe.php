<?php
    fileUploading();
    
    function fileUploading()
    {
        if(isset($_POST['submit']))
        {
            $theNames = $_POST['name'];
            $aFileUpload = "uploads/";
            $aFile = aFiledUpload.basename($_FILES["file"]["name"]);
            $flag_upload = 1;
            $TypeOfFile = strtolower(pathinfo($aFile, PATHINFO_EXTENSION));  

            if($TypeOfFile == null)
            {

                die("No file has been inserted, You need to insert a file. Try Again");
            }

            else if($TypeOfFile != "txt")
            {

                die("This is not the correct text file. It needs to be a .txt file. Try Again");
            }

            if(move_upload_file($_FILES["file"]["tmp_name"], $aFile))
            {

                echo "The file ". htmlspecialchars(basename( $_FILES["file"]["name"])). " uploaded has been done.";
            }
            else
            {

                $flag_upload = 0;

                echo "Error, file could not be uploaded";
            }

            $fileContent = file_get_contents($aFile);

            include('connectingToDatabase.php');

            $sql =  mysqli_query($connecting,"INSERT INTO Info(Name,Content)VALUES('$theNames','$fileContent')");

            header('Location:webPage.php');
        }
        else
        {
            die("Acces is Invalid");
        }
    }
?>



