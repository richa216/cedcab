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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 

        <style>
        .delete
        {
            color:red;
            border:1px solid red;
            border-radius:5px;   
        }
        .delete:hover
        {
            background-color:red;
            color:white;
        }
        #edit
        {
          width:45px;;
          color:blue;
            border:1px solid blue;
            border-radius:5px;  
        }
        #edit:hover
        {
          background-color:blue;
          color:white;
        }
thead
{
  color:white;
  font-size:1.5vw;
}
      
        </style>
</head>
<body>
    <?php
      echo include 'adminloginheader.php';
    ?>

    <div class="table-responsive" style="padding-top:30px;">
       <table id="totalrides" class="table table-striped table-bordered">
            <thead>
              <tr style="background-color:#32a532;">
                <td>Ride_id</td>
                <td>Ride_dte</td>
                <td>From_loc</td>
                <td>To_loc</td>
                <td>Totaldistance</td>
                <td>Luggage</td>
                <td>Totalfare</td>
                <td>pending_status</td>
                <td>Cab_type</td>
              </tr>
            </thead>
           <?php

           $v = $_SESSION['email'];
        //    echo $v;
           $q = "SELECT * FROM cab.tbl_ride where tbl_ride.pending_status = 0";
           $dis4 = $con->query($q);
           $num = mysqli_num_rows($dis4);
           while($row = mysqli_fetch_assoc($dis4))
           {
               echo
            
               '<tr>
                  <td>'.$row["ride_id"].'</td>
                  <td>'.$row["ride_date"].'</td>
                  <td>'.$row["From_loc"].'</td>
                  <td>'.$row["totaldistance"].'</td>
                  <td>'.$row["luggage"].'</td>
                  <td>'.$row["totalfare"].'</td>
                  <td>'.$row["pending_status"].'</td>
                  <td>'.$row["Cab_type"].'</td>
                  <td>'.'<input type="submit" value="delete" class="delete">'.'</td>
                  
                </tr>';
              
           }


             ?>
       </table>
    </div>

       
 






        




  
   
</body>
</html>