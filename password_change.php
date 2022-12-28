<?php
session_start();
include 'dbconnect.php'; //INCLUDING DATABASE CONNECTION 

$email = $_POST['email'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
       
        if($newpassword=$confirmnewpassword){
        $sql="UPDATE `users` SET password='[$newpassword]' where email='[$email]'"; // SQL STATEMENT TO UPDATE PASSWORD
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        header("location: home.php");
        }
       else
        {
       echo "Passwords do not match";
       }
    }
      ?>