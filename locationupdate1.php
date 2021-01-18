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
                <td>Id</td>
                <td>Name</td>
                <td>Is_available</td>
                <td>Action</td>
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
           $q = "SELECT * FROM cab.tbl_location ";
           $dis4 = $con->query($q);
           $num = mysqli_num_rows($dis4);
           $row = mysqli_fetch_assoc($dis4);
           $_SESSION["id"] = $row["id"];
           $_SESSION["name"] = $row["name"];
           $_SESSION["is_available"] = $row["is_available"];
           <form action="locationupdate.php" method="post">
           <div style="padding:10px;">
              <input type="text" name="location" placeholder="Location.." value= '<?php echo $row["id"]; ?>' id="location" required>   
           </div>
           <div style="padding:10px;">
              <input type="text" name="distance" placeholder="distance.." value= '<?php echo $row["name"]; ?>' id="distance" required>   
           </div>
           <div style="padding:10px;">
              <input type="text" name="distance" placeholder="distance.." value= '<?php echo $row["is_available"]; ?>' id="distance" required>   
           </div>
           <div style="padding:10px;">
             <input type="submit" name="addloc" placeholder="addloc" id="addloc" required>   
           </div>
            
        </form>


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