<?php
           $_SESSION["id"] = $row["id"];
           $_SESSION["name"] = $row["name"];
           $x =  $_SESSION["id"];
           $y = $_SESSION["name"] ;


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
</head>

<body>
<?php include 'adminloginheader.php'; ?>
<form action="" method="post">
   <div style="padding:10px;">
      <input type="text" name="location" placeholder="Location.." value= "<?php  echo $x; ?>" id="location" required>   
   </div>
   <div style="padding:10px;">
      <input type="text" name="distance" placeholder="distance.." value= '<?php  echo $y;?>' id="distance" required>   
   </div>
   <!-- <div style="padding:10px;">
      <input type="text" name="distance" placeholder="distance.." value= "<?php echo $row["is_available"]; ?>  id="distance" required>   
   </div> -->
   <div style="padding:10px;">
     <input type="submit" name="addloc" placeholder="addloc" id="addloc" required>   
   </div>
    
</form>
</body>



</form>

</html>