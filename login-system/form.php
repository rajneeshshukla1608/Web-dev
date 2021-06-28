<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/default_style.css">

    <title>signup</title>
<style>

</style>

    </head>
  <body>
  <?php
    require 'patials/_nav.php';
    ?>
    <!-- Register form starts here-->
     
 <center>
    <div class="text-center" id = signup_form>
  <lable>Register</lable>
  <form id="form1" action="/login%20system/signup.php" method="POST">
  <div class="form-group col-md-6">
    <label for="username">Username</label>
    <input type="text" class="form-control" maxlength="20" id="username" name="username" aria-describedby="emailHelp" require>
  </div>
  <div class="form-group  col-md-6">
    <label for="password">Password</label>
    <input type="password"  maxlength="20" class="form-control" id="password" name="password" require>
  </div>
 
  <div  class="form-group col-md-6">
    <label for="cpassword">Confirm Password</label>
    
  <input type="password"  maxlength="20" class="form-control" id="cpassword" name="cpassword" require>
  <!-- <input type="checkbox" onclick="check()"class="form-control" id="checkbox" name="tnc_checkbox"/> -->
   <!-- <input type="text" class="form-control" id="text" name="text"> -->
  </div>

  <div id="cpassword2">
    <small id="emailHelp" class="form-text text-muted">Don't share your password to anyone</small>
<br> 
 <input type="submit" onclick="getInputvalue()" class="btn btn-primary"/>
 </div>
</form>
  </div>
  <!-- Register form ends here-->
<!-- Login form starts here-->

  <div class="text-center my-4" id = "login_form">
 
  <lable float="left">Login</lable>
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
</center>
  <!-- Login form end here-->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="./js/match.js"></script>
  </body>
</html>