<?php
session_start();
$opt = $_POST['opt'];
if($_SESSION['otp'] == $opt)
{
   echo '$s';
}
else
{
    echo 'yupp';
}
?>