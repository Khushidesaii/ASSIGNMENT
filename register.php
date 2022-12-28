<?php
$showAlert = false; //VARIABLE SHOW ALERT
$showError = false; //VARIABLE SHOW ERROR
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php'; // INCLUDE DATABASE FILE
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $s1 = $_POST["s1"];
    $s2 = $_POST["s2"];
    $s3 = $_POST["s3"];
    $s4 = $_POST["s4"];
    $s5 = $_POST["s5"];

    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `firstname`, `lastname`,`phone`, `email`, `password`, `s1`, `s2`, `s3`, `s4`, `s5`) VALUES ('[$firstname]','[$lastname]','[$phone]','[$email]','[$password]','[$s1]','[$s2]','[$s3]','[$s4]','[$s5]')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
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
    <link rel="stylesheet" href="style.css">
    
    <title>SignUp</title>

    <style>
    .block {
        align-items: center;
    }
    .row{
        padding-left: 1.0em;
    }
    input{
        width:100%;
    }
     .center {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 5%;
     }
        </style>
  </head>
  <body>
    <?php require 'nav.php' ?>  <!-- INCLUDE NAVBAR -->
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> '; // SHOW ALERT
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> '; //SHOW ERROR
    }
    ?>

<div class="block"  style="background-color:lightcyan">
  <div class="container my-4" style="padding:1.0em ">
    <h1 class ="text-center"> REGISTER YOURSELF TO AVAIL COLLEGE WEBSITE </h1>  
 <form action="register.php" method="POST">  <!-- FORM FOR REGRISTRATION -->
  <div class="row">
  <label for="name" class="form-label">Name</label>
  <div class="col">  <!-- ENTERING NAME  -->
    <input type="text" class="form-control" placeholder="First name" name="firstname" id="firstname" aria-label="firstname">
  </div>
  <div class="col">  
    <input type="text" class="form-control" placeholder="Last name"  name="lastname" id="lastname" aria-label="lastname">
  </div>
  </div><br>
  <div class="row">
  <div class="mb-6">  
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"> <!-- ENTER EMAIL -->
  </div></div>
  <div class="row">
  <div class="mb-6">
    <label for="phone" class="form-label">Phone no.</label>
    <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp"> <!-- ENTER PHONE -->
  </div></div>
  <div class="row">
  <div class="mb-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control"  name="password" id="password"> <!-- ENTER PASSWORD-->
  </div></div>
  <div class="row">
  <div class="mb-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="cpassword" class="form-control" name="cpassword" id="cpassword"> <!-- ENTER CONFIRM PASSWORD -->
  </div> </div>
  <div class="row">
  <label for="name" class="form-label">Subjects </label>
</div>
<div class="row">
  <div class="col-20" >
    <input type="text" class="form-control" placeholder="s1" name="s1" id="s1" aria-label="s1"> <!-- ENTER SUBJECT 1  -->
  </div>
  <div class="col-20">
    <input type="text" class="form-control" placeholder="s2" name="s2" id="s2"aria-label="s2"> <!-- ENTER SUBJECT 2 -->
  </div>
  

  <div class="col-20">
    <input type="text" class="form-control" placeholder="s3" name="s3" id="s3"aria-label="s3"> <!-- ENTER SUBJECT 3 -->
  </div>
  <br>
  <div class="col-20" >
    <input type="text" class="form-control" placeholder="s4" name="s4" id="s4"aria-label="s4"> <!-- ENTER SUBJECT 4 -->
  </div>
  <br>
 
  <div class="col-20">
    <input type="text" class="form-control" placeholder="s5" name="s5" id="s5"aria-label="s5"> <!-- ENTER SUBJECT 5 -->
  </div>

</div>
<div class="center">
  <button type="submit" class="btn btn-primary">REGISTER</button></div> <!-- SUBMIT -->
</form>
</div>

  </div>
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