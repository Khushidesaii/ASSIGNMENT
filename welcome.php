<?php
session_start(); //SESSION START

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){   //CHECKS LOGGED IN OR NOT
    header("location: login.php");
    exit;
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>welcome student</title>
    
    </head>
  <body>
  <?php require 'nav.php' ?> <!--INCLUDING NAVBAR-->
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center" style="background-color:lightcyan">
                        <h4>VIEW YOUR SUBJECT HERE</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $conn = mysqli_connect("localhost","root","","users"); //ESTABLISHING CONNECTION

                                    if(isset($_GET['email'])) 
                                    {
                                        $email = $_GET['email'];

                                        $query = "SELECT * FROM `users` WHERE `email`= '[$email]'"; // SQL STATEMENT
                                        $query_run = mysqli_query($conn, $query); 

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row) // DISPLAYING DATA
                                            {
                                                ?>
                                                <div class="form-group mb-3" style="background-color:lightcyan">
                                                    <label for="">SUBJECT 1</label>
                                                    <input type="text" value="<?= $row['s1']; ?>" class="form-control" style="background-color:lightcyan">
                                                </div>
                                                <div class="form-group mb-3" style="background-color:lightcyan">
                                                    <label for="">SUBJECT 2</label>
                                                    <input type="text" value="<?= $row['s2']; ?>" class="form-control" style="background-color:lightcyan">
                                                </div>
                                                <div class="form-group mb-3" style="background-color:lightcyan">
                                                    <label for="">SUBJECT 3</label>
                                                    <input type="text" value="<?= $row['s3']; ?>" class="form-control" style="background-color:lightcyan">
                                                </div>
                                                <div class="form-group mb-3" style="background-color:lightcyan">
                                                    <label for="">SUBJECT 4</label>
                                                    <input type="text" value="<?= $row['s3']; ?>" class="form-control" style="background-color:lightcyan">
                                                </div>
                                                <div class="form-group mb-3" style="background-color:lightcyan">
                                                    <label for="">SUBJECT 5</label>
                                                    <input type="text" value="<?= $row['s3']; ?>" class="form-control" style="background-color:lightcyan">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

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