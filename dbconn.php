<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $con = new mysqli($server, $username, $password);
    if(!$con)
        {
            echo("connection failed".mysqli_connect_error());
        }
?>