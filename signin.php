<?php

session_start();

$server = "localhost";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password);
if(!$con)
{
    echo("connection failed".mysqli_connect_error());
}
$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['email']=$email;
$_SESSION['password']=$password;

$em =   $_SESSION['email'];
$pd =   $_SESSION['password'];

$sql1 = "SELECT `password` from cab.tbl_user where email = '{$email}';";
$dis1=$con->query($sql1);
$row1 = mysqli_fetch_assoc($dis1);
// var_dump($pd);
// var_dump($row1['password']);



if(password_verify($pd,$row1['password']))
{
    $sql2 = "SELECT `isadmin` from cab.tbl_user where email = '{$email}';";

    $dis2=$con->query($sql2);
    $row2 = mysqli_fetch_assoc($dis2);
    echo($row2['isadmin']);
}
else
{
	echo 'login failed';
}


// $x = $_POST['loginp'];
?>