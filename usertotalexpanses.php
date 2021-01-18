<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  echo include 'userloginheader.php';
?>
    <div class="table-responsive" style="padding:50px;">
<table id="totalrides" class="table table-striped table-bordered">
    <thead>
      <tr>
        <td>TotalFare</td>
      </tr>
    </thead>
    <?php


            $server = "localhost";
            $username = "root";
            $password = "";
            $con = new mysqli($server, $username, $password);
            if(!$con)
            {
                echo("connection failed".mysqli_connect_error());
            }
            $p = $_SESSION['email'];
            $query = "SELECT sum(totalfare) from cab.tbl_ride as c JOIN cab.tbl_user as u where u.email= '$p' and c.cust_user_id = u.user_id";
            $dis4 = $con->query($query);
            $row=mysqli_fetch_assoc($dis4);
            echo
                '<tr>
                   <td>'.$row['sum(totalfare)'].'</td>
                 </tr>';
 
             
            

    ?>
</table>
</body>
</html>

