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
$password = password_hash($_POST['password'],PASSWORD_BCRYPT );
$oldp =$_POST['oldpassword'];
$_SESSION['email']=$email;
$_SESSION['password']=$password;

$em =   $_SESSION['email'];
$pd =   $_SESSION['password'];
// echo($pd);
$sql3 = "SELECT `password` from cab.tbl_user where email = '$em' ;";
$dis3=$con->query($sql3);
$row3 = mysqli_fetch_assoc($dis3);
$old = $row3['password'];
// echo ($old);
// echo ('<br>');
// echo ($oldp);
if(password_verify($oldp,$old))
{
    $sql2 = "UPDATE cab.tbl_user SET `password` = '$password' where `email` = '$em' ;";
    $dis2=$con->query($sql2);
    // $row2 = mysqli_fetch_assoc($dis2);
    echo 'password updated successfuly';
}
else
{
    echo 'entered password does not match with your old password';
}


// $sql1 = "SELECT `password` from cab.tbl_user where email = '$em' ;";
// $dis1=$con->query($sql1);
// $row1 = mysqli_fetch_assoc($dis1);

// echo($row1['password']);
// var_dump($pd);
// var_dump($row1['password']);


// $x = $_POST['loginp'];
?>