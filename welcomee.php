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
    <title>Welcome student</title>
    <style>
    .center {
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 5em;
}
.space{
    padding-top: 5em;
}
table td {
text-align: center;
background-color:lightcyan;
}
table tr {
text-align: center;
background-color:lightcyan;
}

    </style>
    </head>
  <body>
  <?php require 'nav.php' ?> <!--INCLUDING NAVBAR-->
  <div class="card-header text-center" style="background-color:lightcyan">
                        <h4>VIEW YOUR SUBJECTS HERE</h4>
                    </div>
                    <div class="space"></div>
<?php


$conn=mysqli_connect("localhost","root","","users");
if(!$conn)
{
die("could not connect:");
}
$sql="select * from users where email = '".$_SESSION['email']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<br>";
echo "<table border='1' style='margin-left:35em'>
<tr>
<th> SUBJECT 1</th>
<th>SUBJECT 2</th>
<th>SUBJECT 3</th>
<th>SUBJECT 4</th>
<th>SUBJECT 5</th>
</tr>"; 
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['s1'] . "</td>";
    echo "<td>" . $row['s2'] . "</td>";
    echo "<td>" . $row['s3'] . "</td>";
    echo "<td>" . $row['s4'] . "</td>";
    echo "<td>" . $row['s5'] . "</td>";
    echo "</tr>";
    echo "</table>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?> 
<div class="center">
  <button class="btn btn-primary"> <a href="logout.php"> Logout </a> </button></div>
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