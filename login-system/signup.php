  <?php
  $showalert = false;
  $showerror = false;
  $sherror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'patials/_dbconnect.php';
  $username = @$_POST["username"];
  $password = @$_POST["password"];
  $cpassword = @$_POST["cpassword"];
  // $date = date("Y-m-d").' '.date("h:i:s");
  $exists=false;
  $fetch = mysqli_fetch_array(mysqli_query($conn,"SELECT `username` FROM `users` WHERE `username` LIKE '".$username."'"));
  if ($fetch){
    $exists = true;
   }
  else{
    if(($password == $cpassword) && $exists==false && $password != null){
     $hash = hash('SHA256',$password);   //there is also an hash security system name MD5(message digest 5)
      $sql = "INSERT INTO `users` (`username`, `password`) VALUES ('".$username."', '".$hash."')";
      $result = mysqli_query($conn, $sql);
      if($result){
        $showalert = true;
      }
  }
  else{
    $showerror = " password do not match";
  }
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

    <title>signup</title>
<style>
#form1{
    margin-left:450px;
}
#cpassword2{
    margin-right:450px;
    padding:2px;
}
</style>
</head>
  <body>

  <?php require 'patials/_nav.php'?>
   <?php
  if($showalert){
  echo '
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>sucess</strong> your account is now created and you can login
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  if($showerror){
  echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>error</strong>'.$showerror.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  if(@$exists){
  echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>'.$username.' </strong> already exists please try another
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  if(@$sherror){
  echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>BLANK </strong> Enter something
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  ?> 
  <!-- Form Action start here -->
   <?php 
      // echo @$_POST[username];
      // echo @$_POST[password];
      // $msg =" SIGN UP SUCCESSFULLY ! PLEASE TRY TO LOGIN";
  ?>
  <!-- Form Action Ends Here  -->
  <?php
  //  echo "<lable>.@$msg.</lable>"; 
   ?>
  <div class="text-center">
  <h1>Signup here</h1>

  <form id="form1" action="/login%20system/signup.php" method="POST">
  <div class="form-group col-md-6">
    <label for="username">Username</label>
    <input type="text" class="form-control" maxlength="20" id="username" name="username" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group  col-md-6">
    <label for="password">Password</label>
    <input type="password"  maxlength="20" class="form-control" id="password" name="password" required>
  </div>
 
  <div  class="form-group col-md-6">
    <label for="cpassword">Confirm Password</label>
    
  <input type="password"  maxlength="20" class="form-control" id="cpassword" name="cpassword" required>
  <!-- <input type="checkbox" onclick="check()"class="form-control" id="checkbox" name="tnc_checkbox"/> -->
   <!-- <input type="text" class="form-control" id="text" name="text"> -->
  </div>

  <div id="cpassword2">
    <small id="emailHelp" class="form-text text-muted">Don't share your password to anyone</small>
<br> 
 <input type="submit" onclick="getInputvalue()" class="btn btn-primary">
 </div>
</form>
  </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="./js/match.js"></script>
  </body>
</html>