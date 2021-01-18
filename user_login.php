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


<div id="form">
   <form>
      <input type="text" id="ride_id" name="ride_id">
   </form>    
</div>
    <div class=row style="border:2px solid red;padding-top:50px">
        <div class="admin-card text-center">
          <p>Pending Rides</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="userpendingrides.php" class="btn btn-outline-info" id="pending">Pending Rides</a>
        </div>

        <div class="admin-card text-center">
          <p>Complete Rides</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="#" class="btn btn-outline-info" id="complete">Complete Rides</a>
        </div>


        <div class="admin-card text-center">
          <p>All Rides</p>
          <p id='ride'>0</p>
          <p id="card-ride-request"></p>
          <a href="allrides.php" class="btn btn-outline-info" id="all">All Rides</a>
        </div>

        <div class="admin-card text-center">
          <p>Total Expanses</p>
          <p>0</p>
          <p id="card-ride-request"></p>
          <a href="usertotalexpanses.php" class="btn btn-outline-info" id="total">Total Expanses</a>
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
           $q = "SELECT * from cab.tbl_ride as c JOIN cab.tbl_user as u where u.email= '$v' and c.cust_user_id = u.user_id and u.isadmin='1' and c.pending_status='0';";
           $dis4 = $con->query($q);
           if(isset($_SESSION['email']))
           {
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
                  <td>'.'<input type="submit" value="Pending" id="edit" class="delete" style="color:red;">'. ' <input type="submit" value="cancel" class="delete" id="delete">'.'</td>
                </tr>';
              
           }
        }


             ?>
       </table>
       </div>
       <!-- <div style="border:2px solid red;height:100px;margin-top:800px;">
        <?php echo require 'footer.php'; ?>  
    </div> -->



<script>
    $(document).ready(function()
    {
    
      del = document.getElementsByClassName('delete');
      Array.from(del).forEach((element)=>{
      element.addEventListener('click',(e)=>
			     {
  $('#frm').display='block';
              tr = e.target.parentNode.parentNode;
              ride_id1 = tr.getElementsByTagName("td")[0].innerHTML;
              From = tr.getElementsByTagName("td")[1].innerHTML;
              To = tr.getElementsByTagName("td")[2].innerText;
              ride_date = tr.getElementsByTagName("td")[3].innerText;
              totaldistance =  tr.getElementsByTagName("td")[4].innerText;
              TotalFare = tr.getElementsByTagName("td")[6].innerText;
              console.log(ride_id1);
              console.log(From);
              console.log(To);
              console.log(totaldistance);
              console.log(TotalFare);
			        document.getElementById('ride_id').value = ride_id1;
			
          $.ajax({
              type:'POST',
              url:'userchangestatus.php',
              data:{
                ride_id:ride_id1,
                },
              success:function(data3)
              {
              console.log(data3);
              if(data3==2)
              {
                alert('your ride has been successfuly canceled');
                location.reload();
              }
              else
              {
                  alert('ride can not be cancel now');
                
              }
             
              }
              
            });

			});
			
		});


});



    </script>
</body>
</html>