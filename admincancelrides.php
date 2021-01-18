<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>

<style>
.row
{
    display: flex;
    flex-wrap: wrap;
}
.admin-card
{
    background-color: #46523C;
    width: 20%;
    color: white;
    margin: 10px 10px 10px 50px;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
}
p
{
    margin-top: 0;
    margin-bottom: 1rem;
}
a
{
    text-decoration: none;
}

.btn
{
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.btn{
    cursor: pointer;
}

.btn-outline-info {
    color: #17a2b8;
    border-color: #17a2b8;
}


body
    {
        font-size: 2rem;
    font-weight: 400;
    line-height: 1.5;
    color: #645454;
    text-align: left;
    overflow-x:hidden;
    }
</style>
<body>
<?php echo include('userloginheader.php');?>
<div class="table-responsive" style="padding:100px;">
       <table id="totalrides" class="table table-striped table-bordered">
            <thead>
              <tr>
              <td>Ride_id</td>
                <td>From</td>
                <td>To</td>
                <td>Ride Date(YYYY-MM-DD)</td>
                <td>TotalDistance(KM)</td>
                <td>Luggage(KG)</td>
                <td>TotalFare(Rs)</td>
                <td>Actions</td>
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
           $date1= date("Y-m-d");
           $q = "SELECT * from cab.tbl_ride as c where c.pending_status='2';";
           $dis4 = $con->query($q);
   
           while($row = mysqli_fetch_assoc($dis4))
           {
               echo
               '<tr>
                  <td>'.$row["ride_id"].'</td>
                  <td>'.$row["From_loc"].'</td>
                  <td>'.$row["To_loc"].'</td>
                  <td>'.$row["ride_date"].'</td>
                  <td>'.$row["totaldistance"].'</td>
                  <td>'.$row["luggage"].'</td>
                  <td>'.$row["totalfare"].'</td>
                  <td>'. ' <input type="submit" value="cancelled" class="delete" id="delete">'.'</td>
                </tr>';
              
           }
        

             ?>
       </table>
       </div>
       <div style="border:2px solid red;height:100px;margin-top:800px;">
        <?php echo require 'footer.php'; ?>  
    </div>