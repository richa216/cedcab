<?php

$server = "localhost";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password);
if(!$con)
{
    echo("connection failed".mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $id = $_POST['id'];
  $name = $_POST['location'];
  $dis = $_POST['distance'];
  $status = $_POST['status'];
  function update()
{
  global $con;
  global $dis;
  global $id;
  global $name;
  global $status;

  $loc = $_POST['loc'];

  $upd = "UPDATE cab.tbl_location SET `id`= '$id',`name`='$name',`distance`='$dis',`is_available`= '$status' WHERE tbl_location.id = '$id' ";

  $con->query($upd);
}

}

if(isset($_POST["addloc"]))
{
  update();

  
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
#frm
{
  border:2px solid black;
  width:300px;
  margin:80px;
  text-align:center;
  padding-bottom:30px;
}
      
        </style>
</head>
<body>
    <?php
      echo include 'adminloginheader.php';
    ?>
    <div id="frm">
      <form action="" method="post">
              <h3>Update Location</h3>
              id:<input type="text" name="id" id="id"><br><br>  
              Location:<input type="text" name="location" id="location" ><br><br> 
              Distance:<input type="text" name="distance" id="distance"><br><br>   
              Is_Available:<input type="text" name="status" id="status" ><br><br>  
    
            <input type="submit" name="addloc" id="addloc">   
      </form>


    </div>  

    <div class="table-responsive" style="padding-top:30px;">
       <table id="totalrides" class="table table-striped table-bordered">
            <thead>
              <tr style="background-color:#32a532;">
                <td>Id</td>
                <td>Name</td>
                <td>Distance</td>
                <td>Is_available</td>
                <td>Action</td>
              </tr>
            </thead>
           <?php

           $v = $_SESSION['email'];
        //    echo $v;
           $q = "SELECT * FROM cab.tbl_location";
           $dis4 = $con->query($q);
           $num = mysqli_num_rows($dis4);
           while($row = mysqli_fetch_assoc($dis4))
           {
               echo
            
               '<tr>
                  <td>'.$row["id"].'</td>
                  <td>'.$row["name"].'</td>
                  <td>'.$row["distance"].'</td>
                  <td>'.$row["is_available"].'</td>
                  <td>'.'<input type="submit" value="edit" id="edit" class="delete">'.'</td>
                  
                </tr>';
              
           }


             ?>
       </table>
    </div>

       
 
    <script>
     



    document.getElementById("frm").style.display = "none";

		del = document.getElementsByClassName('delete');

		Array.from(del).forEach((element)=>{
			element.addEventListener('click',(e)=>
			{
			tr = e.target.parentNode.parentNode;
			id1 = tr.getElementsByTagName("td")[0].innerText;
			dis1 = tr.getElementsByTagName("td")[2].innerText;
      name1 = tr.getElementsByTagName("td")[1].innerText;
			is_available1 = tr.getElementsByTagName("td")[3].innerText;

			// console.log(id1);
			// console.log(name1);
			// console.log(is_available1);
			console.log(tr);
      document.getElementById("id").value = id1;
      document.getElementById("location").value  = name1;
      document.getElementById("distance").value  = dis1;
      document.getElementById("status").value = is_available1;

      document.getElementById("frm").style.display = "block";    
		

			});
			
		});

    

    </script>





        




  
   
</body>
</html>