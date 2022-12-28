<?php 
$server= "localhost"; //servername
$username="root"; //username
$password=""; //password
$database="users"; //database

$conn=mysqli_connect($server,$username,$password,$database); //connecting to database
if (!$conn){
    die("error"); //IF CONNECTION FAILED SHOWS ERROR 
}

?>