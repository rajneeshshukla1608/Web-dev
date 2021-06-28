<?php
  $login = false;
  $showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'patials/_dbconnect.php';
  $username = @$_POST["username"];
  $password = hash('SHA256',@$_POST["password"]);
  // $date = date("Y-m-d").' '.date("h:i:s");
    $sql = "SELECT * FROM `users` WHERE `username` LIKE '".$username."' AND `password` LIKE'".$password."'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    //echo $num;
    if ($num){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header("location: welcome.php");
    }
 else{
   $showerror = " Invalid credentials";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <title>login</title>
<style>
#form1{
    margin-left:450px;
}
#cpassword2{
    margin-right:450px;
    padding:2px;
}
</style>
<title>login</title>
</head>
  <body>

  <?php require 'patials/_nav.php'?>
   <?php
  if($login){
  echo '
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>sucess</stron>your are logged in Welcome
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  if($showerror){
  echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>error</stron>' .$showerror.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  ?> 
  <div class="text-center my-4">
  <h1>Login to our website</h1>

  <form id="form1" action="/login%20system/login.php" method="POST">
  <div class="form-group col-md-6">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" require>
  </div>
  <div class="form-group  col-md-6">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" require>
  </div>
  <div id="cpassword2">
    <small id="emailHelp" class="form-text text-muted">Don't share your password to anyone</small>
    <br>
 <button type="submit" onclick="getInputvalue()" class="btn btn-primary">Login</button>
 </div>
</form>
  </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="./js/logout.js"></script>
  </body>
</html>