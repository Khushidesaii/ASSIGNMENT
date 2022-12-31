<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Welcome to Assignment</title>
<style>
  .carousel-caption {
  width: 25px;
  height: 25px;
  animation-name: example;
  animation-duration: 15s;
  animation-iteration-count: 10;
}

@keyframes example {
  0%   {left:700px; top:0px;}
  75%  {left:700px; top:80px;}
  100% { left:700px; top:0px;}
}


    .row{
        padding:1.0em;
        margin-left: 1em;
    }
    .column{
        margin:1em;
        height:10%;
        width:25%;
    }
    .myButton{
        padding: 0.5em 0.5em 0.5em;
        display: flex;
        justify-content: center;
        align-items: center;
       
        
    }
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


 </style>
    </head>
  <body>
    <?php require 'nav.php' ?> <!--INCLUDING NAVBAR-->
    <div class="carousel-inner">
    <div class="item active">
      <img src="clgg.jpeg" alt="Chania" >
      <div class="carousel-caption">
        <h3> EMPOWERING THROUGH EDUCATION </h3>
        <p>  LEARNING TODAY, LEADING TOMORROW! </p>
      </div>
    </div>
    

    
<div class="myButton"  style="background-color:lightcyan"> <!-- IMAGES AS LINKS -->
<p>
 <a href="about.php">
  <img src="about.jpeg" style="border-radius: 15px" >
 </a>
</p>
</div>
  <div class="myButton"  style="background-color:lightcyan">  <!-- IMAGES AS LINKS -->
<p> 
 <a href="about.php">
  <img src="contactus.jpeg" style="border-radius: 15px">
 
 </a>
</p></div>
  <div class="myButton"  style="background-color:lightcyan">  <!-- IMAGES AS LINKS -->
  <p> 
 <a href="about.php">
  <img src="visionn.jpeg" style="border-radius: 15px">
  
 </a>
</p>
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