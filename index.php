<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Complaint Application</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 2%; /* Adjust padding for fixed navbar */
        }
        .container-fluid {
            max-width: 800px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg fixed-top bg-dark" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav><!--Nav end-->
        </div>
    </div>
    
     <!--Second row-->
   <div class="row d-flex justify-content-center align-items-center mt-5">
        <div class="col-md-12">
          <h2>Login</h2>
        <form method="post" class="form-group">
          <div class="col-md-3">
            <label for="user">Username</label>
          </div>
          <div class="col-md-9">
            <input type="text" id="user" name="user" class="form-control" autocomplete="off" required>
          </div>
          <div class="col-md-3">
            <label for="pass">Password</label>
          </div>
          <div class="col-md-9">
            <input type="password" id="pass" name="pass" class="form-control" autocomplete="off"  required>
          </div>
          <div class="col-md-3">
           
          </div>
          <div class="col-md-9">
            <input type="submit" id="login" name="login" class="btn btn-primary" value="login">
          </div>
        </form>
        </div>
   </div>
   <!--Third row-->
   <div class="row">

   </div>
   <!--Footer row-->
   <div class="row">

   </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include "config.php";
if(isset($_POST['login'])){
  $_SESSION['u']=$user=$_POST['user'];
  $pass = $_POST['pass'];
  $sql=mysqli_query($conn,"select * from login where username='$user' AND password='$pass'");
  if(mysqli_num_rows($sql)==1){
   header('location:dashboard.php');
  }
  else{
    echo "Invalid login";
  }
}
?>