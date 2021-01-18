<?php


    $server = "localhost";
    $username = "root";
    $password = "";
    $con = new mysqli($server, $username, $password);
    // if(!$con)
    // {
    //     echo("connection failed".mysqli_connect_error());
    // }
    $x = $_POST['ride_id'];


    $q = "SELECT pending_status from cab.tbl_ride as c where c.ride_id='$x';";
    $p = $con->query($q);
    $row = mysqli_fetch_assoc($p);
    $ps = $row['pending_status'];
    // echo($ps);
    if($ps==0)
    {
        $sql = "UPDATE cab.tbl_ride SET `pending_status` = '1' WHERE ride_id='$x' ";
        $con->query($sql);
    }

    $q1 = "SELECT pending_status from cab.tbl_ride as c where c.ride_id='$x';";
    $p1 = $con->query($q1);
    $row1 = mysqli_fetch_assoc($p1);
    $ps1 = $row1['pending_status'];
    echo($ps1); 
    

?>