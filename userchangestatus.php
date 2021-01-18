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
    $v = $_SESSION['email'];
    $x = $_POST['ride_id'];
  
    $p = "SELECT pending_status from cab.tbl_ride as c JOIN cab.tbl_user as u where u.email= '$v' and c.pending_status='0' and c.ride_id='$x';";
    // $q = "SELECT pending_status from cab.tbl_ride as c where c.ride_id='$x';";
    // echo($p);
    $p = $con->query($p);
    $row = mysqli_fetch_assoc($p);
    $ps = $row['pending_status'];

    $m = "SELECT cust_user_id from cab.tbl_ride as c JOIN cab.tbl_user as u where u.email= '$v' and c.cust_user_id = u.user_id and u.isadmin='1' and c.pending_status='0';";
    //  echo($m);
    $row3 = $con->query($m);
    $row4 = mysqli_fetch_assoc($row3);
    $id = $row4['cust_user_id'];

    // echo($ps);
    if($ps==0)
    {
        $sql = "UPDATE cab.tbl_ride SET `pending_status` = '2' WHERE ride_id='$x' and cust_user_id='$id' ";
        $con->query($sql);
    }

    $q2 = "SELECT pending_status from cab.tbl_ride as c JOIN cab.tbl_user as u where u.email= '$v' and c.ride_id='$x';";
    // echo $q2;
    $p2 = $con->query($q2);
    $row2 = mysqli_fetch_assoc($p2);
    $ps2 = $row2['pending_status'];
    echo($ps2); 
    

?>