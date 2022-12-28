<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Password Change</title>
    <style>
    .center {
  display: flex;
  justify-content: center;
  align-items: center;
  
   }
    </style>
     </head>
    <body>
    <?php require 'nav.php' ?> <!--INCLUDING NAVBAR-->
    <h1><center>Change Password</center></h1>
   <form method="POST" action="password_change.php" style="background-color:lightcyan"> 
   <div class="center">
   <table>
       
    <tr>
   <td>Enter your Email </td> <!-- ENTER EMAIL -->
    <td><input type="email" size="10" name="email"></td>
    </tr>
    <tr>
    <td>Enter your existing password:</td> <!-- ENTER EXISTING PASSWORD -->
    <td><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td> <!-- ENTER NEW PASSWORD -->
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td> <!-- RE ENTER NEW PASSWORD -->
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    <tr>
   <td> <p><input type="submit" value="Update Password"> </td> </tr>
    
    <tr><td><p><a href="home.php">Home</a></td></tr> <!-- BACK TO HOME -->
    <tr><td><p><a href="logout.php">Logout</a></td></tr> <!-- LOGOUT -->
  </table>
</form>
   </body>
    </html>  
