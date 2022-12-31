<?php
$login = false; 
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php'; // INCLUDE DATABASE FILE 
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
    $sql = "Select * from users where email='$email' && password='$password'"; //SQL STATEMENT
    $result = mysqli_query($conn, $sql); 
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email']= $_POST["email"];
        header("location: welcomee.php"); //IF CONDITION IS TRUE WILL CONNECT TO WELCOME PAGE
       
    } 
    else{
        $showError = "Invalid Credentials"; // SHOWS ERROR MESSAGE
    }
}
    
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
    <style>
        .container {
 
  position: center;
  padding-top: 5em;
  margin-top: 5em;
  
}


.center {
  display: flex;
  justify-content: center;
  align-items: center;
  
}
        </style>
  </head>
  <body>
  <?php require 'nav.php' ?> <!-- NAVBAR -->
  <?php

    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>


  <div class="container my-4" style="background-color:lightcyan">
    <h1 class ="text-center"> LOGIN TO OUR COLLEGE WEBSITE </h1>

    <form action="login.php" method="POST" style="padding-top:50px;">
    <div class="mb-3">
    <label for="email" class="form-label">Email</label> <!-- ENTER EMAIL -->
    <input type="email" class="form-control"  id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label> <!-- ENTER PASSWORD -->
    <input type="password" class="form-control" id="password" name="password" >
  </div>
  <div class="center">
  <button type="submit" class="btn btn-primary">Login</button></div>
    </form>
    <h6> <a href="updatepassword.php"> Change Password? </h6> <!-- CHANGE PASSWORD -->
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>