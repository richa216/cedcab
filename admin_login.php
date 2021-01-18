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
    }
</body>
</style>
<body>
<?php
   require 'adminloginheader.php';
 
?>
<div id="form">
   <form>
      <input type="text" id="ride_id" name="ride_id">
   </form>    
</div>

    <div class=row style="padding:80px;">
        <div class="admin-card text-center">
          <p>Ride Requests</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="#" class="btn btn-outline-info">Ride Requests</a>
        </div>

        <div class="admin-card text-center">
          <p>Complete Rides</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="#" class="btn btn-outline-info">Complete Rides</a>
        </div>


        <div class="admin-card text-center">
          <p>Canceled Rides</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="admincancelrides.php" class="btn btn-outline-info">Canceled Rides</a>
        </div>

        <div class="admin-card text-center">
          <p>All Rides</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="showallrides.php" class="btn btn-outline-info">Ride Requests</a>
        </div>
        <div class="admin-card text-center">
          <p>Pending user request</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="pendingrides.php" class="btn btn-outline-info">Pending user request</a>
        </div>
        <div class="admin-card text-center">
          <p>Approved users Requests</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="approveuserreq.php" class="btn btn-outline-info">Approved user Request</a>
        </div>
        <div class="admin-card text-center">
          <p>All users </p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="adminallusers.php" class="btn btn-outline-info">All users</a>
        </div>
        <div class="admin-card text-center">
          <p>Serviceable Locations</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="serviceloc.php" class="btn btn-outline-info">Serviceable Locations</a>
        </div>
          
      </div>
        
 
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
          //  SELECT * from cab.tbl_ride as c JOIN cab.tbl_user as u where c.pending_status='0';
           $q = "SELECT * from cab.tbl_ride as c where c.pending_status='0';";
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
                  <td>'.'<input type="submit" value="approve" class="approve">'.'</td>
                </tr>';
              
           }
        
            // if(isset($_POSt['approve']))
            // {
            //   
            // }
                        ?>
                  </table>
                  </div>


    <div style="border:2px solid red;height:100px;margin-top:800px;">
        <?php echo require 'footer.php'; ?>  
    </div>


    <script>
$(document).ready(function()
{
  $('#frm').display='none';
  del = document.getElementsByClassName('approve');
    Array.from(del).forEach((element)=>{
      element.addEventListener('click',(e)=>
			     {
              tr = e.target.parentNode.parentNode;
              ride_id1 = tr.getElementsByTagName("td")[0].innerHTML;
              From = tr.getElementsByTagName("td")[1].innerHTML;
              To = tr.getElementsByTagName("td")[2].innerText;
              ride_date = tr.getElementsByTagName("td")[3].innerText;
              totaldistance =  tr.getElementsByTagName("td")[4].innerText;
              TotalFare = tr.getElementsByTagName("td")[5].innerText;
              console.log(ride_id);
              console.log(From);
              console.log(To);
              console.log(totaldistance);
              console.log(TotalFare);
			        document.getElementById('ride_id').value = ride_id1;
			
    $.ajax({
        type:'POST',
        url:'changestatus.php',
        data:{
          ride_id:ride_id1,
          },
        success:function(data3)
        {
         /* console.log(data3); */
         if(data3==1)
         {
           alert('ride approved');
         }
         else{
            alert('ride cancelled');
          
         }
         location.reload();
        }
        
      });

			});
			
		});


});



    </script>

</body>
</html>