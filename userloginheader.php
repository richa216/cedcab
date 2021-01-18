<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("location:signup.php");
}
$v = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
 <style>
 .log
{
  color: yellow;
  font-size: 28px;
}
.bg-dark {
    background-color: #343a40!important;
}
.logo-margin {
    margin-left: 10px;
}

.navbar-brand {
    display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}
 </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-car car1" style=""></i> <span class="log">CED<span><span style="color:white;font-size: 28px;">CAB</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="index.php">Book New Ride</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Rides<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="userpendingrides.php">Pending Rides</a></li>
            <li><a href="#">Completed Rides</a></li>
            <li><a href="allrides.php">All Rides</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="updateadmininfo.php">Update Information</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:white;"><span class="glyphicon glyphicon-user"></span><?php echo $v; ?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
