<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
</head>
<body>
    <?php
      echo include 'userloginheader.php';
    ?>
    <div class="table-responsive" style="padding:100px;">
       <table id="totalrides" class="table table-striped table-bordered">
            <thead>
              <tr>
                <td>From</td>
                <td>To</td>
                <td>Ride Date(YYYY-MM-DD)</td>
                <td>TotalDistance(KM)</td>
                <td>Luggage(KG)</td>
                <td>TotalFare(Rs)</td>
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
           $v = $_SESSION['email'];
        //    echo $v;
           $q = "SELECT `prod_name`,`description` FROM `tbl_product_description` as `tdp` JOIN `tbl_product` as `tb` WHERE `tdp`.prod_id = `tb`.id";
           $dis4 = $con->query($q);
           $num = mysqli_num_rows($dis4);
           
           while($row = mysqli_fetch_assoc($dis4))
           {
               echo
               '<tr>
                  <td>'.$row["From_loc"].'</td>
                  <td>'.$row["To_loc"].'</td>
                  <td>'.$row["ride_date"].'</td>
                  <td>'.$row["totaldistance"].'</td>
                  <td>'.$row["luggage"].'</td>
                  <td>'.$row["totalfare"].'</td>
                </tr>';
              
           }


             ?>
       </table>
        
    </div>


    <script>
        $(document).ready( function (){
             $('#totalrides').DataTable();
        });
    </script>
</body>
</html>