<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = new mysqli($server, $username, $password);
    if(!$con)
    {
        echo("connection failed".mysqli_connect_error());
    }

    $loc = $_POST['location'];
    $dis = $_POST['distance'];


    $addloc = "INSERT INTO cab.tbl_location (`id`, `name`, `distance`, `is_available`) VALUES (NULL, '$loc', '$dis', '1');";
    $con->query($addloc);





?>