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
<form style="padding:80px;">
   <div style="padding:10px;">
      <input type="text" name="location" placeholder="Location.." id="location" required>   
   </div>
   <div style="padding:10px;">
      <input type="text" name="distance" placeholder="distance.." id="distance" required>   
   </div>
   <div style="padding:10px;">
     <input type="submit" name="addloc" placeholder="addloc" id="addloc" required>   
   </div>
    
</form>
</body>


<script>
   $(document).ready(function()
   {
       $('#addloc').click(function(){
           var loc = $('#location').val();
           var dis = $('#distance').val();

            $.ajax({
                url:'addlocationdata.php',
                type: "POST",
                data:
                    {
                        location:loc,
                        distance:dis,
    
                    },
                success: function(data)
					{
						debugger;
						// $('#distance').html(data);
						      console.log(data);
						// alert('location added successuly');
						                                      
					}
                  
            });
            window.location.href = 'loclist.php';
       });
   
   });   
</script>

</html>