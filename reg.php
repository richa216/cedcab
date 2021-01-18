<?php
$server = "localhost";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password);
if(!$con)
{
    echo("connection failed".mysqli_connect_error());
}

   $password = password_hash($_POST['password'],PASSWORD_BCRYPT );

   $email = $_POST['email'];
   $name = $_POST['name1'];
   $contact = $_POST['mob1'];
   $_SESSION['name'] = $name;
   $_SESSION['mob'] = $contact;
   $today = date("Y-m-d H:i:s");
   $sql="INSERT INTO cab.tbl_user(`user_id`, `email`, `name`, `signupdate`, `mobile`, `status`, `password`, `isadmin`) VALUES (NULL, '$email', '$name','$today', '$contact', '1', '$password', '1');";
   $x = $con->query($sql);


?>
    
