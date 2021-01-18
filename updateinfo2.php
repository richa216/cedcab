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
$name = $_POST['name1'];
$mob = $_POST['mob1'];

$_SESSION['email']=$email;
$_SESSION['name1']=$name;
$_SESSION['mob1']=$mob;

$em =   $_SESSION['email'];
$pd =   $_SESSION['name1'];
$mb =   $_SESSION['mob1'];
// echo($pd);
$sql3 = "SELECT `user_id` from cab.tbl_user where email = '$em' ;";
$dis3=$con->query($sql3);
$row3 = mysqli_fetch_assoc($dis3);
$id = $row3['user_id'];


$sql2 = "UPDATE cab.tbl_user SET `email` = '$email',`name` ='$name', `mobile`='$mob' where `user_id` = '$id' ;";
echo($sql2);
$dis2=$con->query($sql2);
$row2 = mysqli_fetch_assoc($dis2);

$sql1 = "SELECT `name` from cab.tbl_user where email = '$em' ;";
$dis1=$con->query($sql1);
$row1 = mysqli_fetch_assoc($dis1);

echo($row1['name']);
// var_dump($pd);
// var_dump($row1['password']);


// $x = $_POST['loginp'];
?>