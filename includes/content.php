<?php
session_start();
error_reporting(E_ERROR | E_PARSE);

include '/xampp/htdocs/dashboard/facebook/includes/connect.php';
?>

<div class="container-fluid main">
<div class="row">
<div class="col-md-5 col-12 offset-md-2">
<img src="/dashboard/facebook/logo.svg" alt="" class="img-fluid">
<p class="text-start ">Facebook helps you connect <br>
 and share with the people in your life.</p>
</div>
<div class="col-md-4 col-12 ">
<div class="form">
<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="post">
<input type="text" class="form-control" placeholder="EMAIL ADDRESS OR PHONE" name="username">
<input type="text" class="form-control" placeholder="Password" name="pass" required>
<input type="submit" value="login" class="form-control btn btn-primary" >
<a href="" class="forget">forget password</a>
</form>

<hr>
<!-- <a href="" class="signup btn ">Create New Account</a> -->

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

  $username= $_POST['username'];
  $pass= sha1($_POST['pass']);
  $st = $con->prepare("select * from users where username='$username' and password='$pass'");
  $st->execute();
  $count =$st->rowcount();

  if($count > 0 ){
      $_SESSION['user']=$username;
      header('location:./includes/home.php');
      exit();
    
  }else{
    echo '<h1>sorry user and password not found</h1>';
  }
  }

?>

<!-- Button trigger modal -->
<button type="button" class="signup btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
Create New Account</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">sign up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/dashboard/facebook/includes/signup.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="user">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" name="phone">
  </div>
  
  <button  class="btn btn-primary" id="btn">Submit</button>
</form>

      </div>
    </div>
  </div>
</div><!-- register form -->
</div><!-- main form end -->
</div><!-- end of col of form -->
</div><!-- end of main row  -->
</div> <!-- end of main container  -->

<?php

