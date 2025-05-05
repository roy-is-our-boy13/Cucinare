<?php
    if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
    {
      $Users_email=$_POST['email'];
      $thePass=$_POST['password'];
      
      mysql_connect('localhost','root','Cuninare');
      mysql_select_db('account');
      $select=mysql_query("update user set password='$$thePass' where email='$Users_email'");
    }
?>
