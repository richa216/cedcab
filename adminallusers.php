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
      
        </style>
</head>
<body>
    <?php
      echo include 'adminloginheader.php';
    ?>
    <div class="table-responsive" style="padding:100px;">
       <table id="totalrides" class="table table-striped table-bordered">
            <thead>
              <tr style="background-color:#32a532;">
                <td>UserName</td>
                <td>Name</td>
                <td>DateofSignup(YYYY-MM-DD)</td>
                <td>Mobile</td>
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
           $q = "SELECT * from cab.tbl_user;";
           $dis4 = $con->query($q);
           $num = mysqli_num_rows($dis4);
           while($row = mysqli_fetch_assoc($dis4))
           {
               echo
               '<tr>
                  <td>'.$row["email"].'</td>
                  <td>'.$row["name"].'</td>
                  <td>'.$row["signupdate"].'</td>
                  <td>'.$row["mobile"].'</td>
                  <td>'.'<input type="submit" value="Block" class="delete">'.'</td>
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