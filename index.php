<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
		body
		{
			background-image: url('cab3.jpg');
			background-repeat: no-repeat;
		}
		.div1
		{
			
			height: 8.5vw;
		}
	    .div2
		{
			
			height: 520px;
		}
		.div3
		{
			
			height: 70px;
		}
			.c1
		{
		display: block;
			width: 100%;
			height: auto;
			text-align: center;
			padding-top: 10px;
			position: absolute;
			
		padding-bottom: 20%;

		
			

		}



    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button
    {
    	-webkit-appearance: none;
    	margin: 0;
    }




		


		.form
		{
			float: left;
			position: relative;
			line-height: 3.5vw;
			border: 2px solid white;
			width: 25vw;

			padding-bottom: 10px;
			transform:translate(30%,8%);
			text-align: center;
			background-color: white;

			border-radius: 10px;

		
		}
		.form form input
		{
			width: 22vw;
			
			border: none;
			height: 3vw;
			background-color: #f4f4f4;
			
			color: black;


		}

		.form form .btn
		{
			background-color: #d4e61d;
			color: black;
				opacity: 1;
				font-size: 18px;
				
				font-weight: 600;

		}
		.city
		{
			
			width: 80px;
			border-radius: 20px;
			margin-left: 130px;
			height: auto;
		    font-size: 10px;
			margin-top: 10px;
			width: 100px;
			
			background-color: #d4e61d;
		}
		.bd1
		{
			border: 0.5px solid lightgrey;
			opacity: 0.2;
		}


		select
		{
			width: 22vw;	
			border: none;
			background-color: #f4f4f4;
			margin: 5px;
			opacity: 0.7;
			line-height: 3vw;
			height: 3vw;
			


		}

		.t1
		{
			padding-top: 3vw;
			color: white;
			text-align: center;
			

		}
		.t1:hover
		{
			color: red;
			cursor: pointer;
		}


		#fair
		{
			background-color: #314f5f;
			float: right;
		    text-align: center;
			color: white;
			width: 600px;
		    margin-top: 63px;
			  
		}
#btn
{
	margin-top: 20px;
}

.fa1
{
	float: right;
	cursor: pointer;
	color: black;
}
#fair h4
{
	color: #d4e61d;
	margin-top: 25px;
	padding-bottom: 25px;
}

.t1 h4
{
	color: yellow;
}

@media only screen and (min-device-width: 250px) and (max-device-width: 800px)
{
		

	.form
		{
			position: relative;
			line-height: 50px;
			border: 2px solid white;
		    color: white;
		    border: 10px solid black;
			width: 500px;
			padding:50px;
			transform:translate(45%,8%);
			text-align: center;
			
		}

	select
		{
			height: 4vw;
			width: 30vw;
		}
	
		.div2
		{
			height: 650px;

		}
		.t1 
		{
			color: black;
		}
		.t1 h4
		{
			color: red;
		}
		body
		{
			background-image: none;
		}
		.city
		{
			color: black;
		}
	
		#fair
		{
			width: 600px;
			margin-top: -410px;
			transform:translate(-33%,40%);
			z-index: 1;
		}
		.form form input
		{
			height: 4vw;
			width: 30vw;
		}
}

	</style>
</head>
<body>
	<div class="div1">
		<?php
		require 'header.php';
		?>
	</div>
	<div class="div2">
		<div class="t1">
	    <div>
	    	<h1><b>Book a City Taxi to your destination in town</b></h1>
	        <h4>choose from a range of categories and prizes</h4>
	    </div>	

       </div>

 
    <div class="form">
    	<div class="city">
    		<h4>CityTaxi</h4>
    	</div>
        <div class="bd1"></div>
 	    <h4>Your everyday travel partner</h4>
  
    	<form>
		    <select name='pick' id="pick">
                <option disabled selected>--PICKUP Location --</option>
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
				   $q = "SELECT `name` FROM cab.tbl_location;";
				   $dis4 = $con->query($q);
				   while($data = mysqli_fetch_assoc($dis4))
				   {
					   echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>"; 
                    }	
                ?>  
           </select>


		   <select  name="drop" id="drop">
                <option disabled selected>--DROP Location--</option>
                <?php
                   $server = "localhost";
				   $username = "root";
				   $password = "";
				   $con = new mysqli($server, $username, $password);
				   if(!$con)
				   {
					   echo("connection failed".mysqli_connect_error());
				   }
				   $q = "SELECT `name` FROM cab.tbl_location;";
				 
				   $dis4 = $con->query($q);
				   while($data = mysqli_fetch_assoc($dis4))
				   {
					   echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>"; 
                    }	
                ?>  
           </select>




    		 <select value='sec1' id="type">
    			<option>CAB Type</option>
    			<option>Cedmicro</option>
    			<option>Cedmini</option>
    			<option>Cedroyal</option>
    			<option>CedSV</option>
    		</select>
    		<input type="number" name="weight"  height="68" placeholder="Luggage   Enter Weight in KG" id="weight" value="0">
    		<!-- <input type="text" name="distance" placeholder="distance"> -->
    		     <!-- <div id="distance">fair</div> -->
    		
    		<input type="button" name="btn" value="Calculate Fare" id="btn" class="btn">
          
    	</form>

    </div>




    <div id="fair">
        <div class="fa1"><i class="fa fa-close" id="fa1" style="font-size:20px"></i></div>
     
    	<h4>Booking Details</h4>
    	<p id="frm"></p> 
    	<p id="to"></p>
    	<p id="typ"></p>  
        <p id="fr"></p>
		<input type="button" name="book" id="book" value="Book Now" style="margin-bottom:20px;">
 

    
    </div>
</div>
	</div>
	<div class="div3">
		<?php
		require 'footer.php';
		?>
	</div>





	<script>
		$(document).ready(function()
            	{
            		document.getElementById("fair").style.display = 'none';
                    //for selecting one option at a time from differnt select box
            		$('select').on('change', function() 
            		{
                    $('option').prop('disabled', false);
                    $('select').each(function()
                     {
                    	var val = this.value;
                        $('select').not(this).find('option').filter(function()
                         { 
                        return this.value == val;
                    }).prop('disabled', true); 
                    });
                }).change(); 




                    //for disabling weight option on  cedmini
        $('#type').on('change', function()
            {
            			if($('#type').val()=='Cedmicro')
            			{
            				$('#weight').prop('readonly', true); 
            				$("#weight").val("Sorry, Luggage Not Allowed");
            			
            			}
            			else
            			{
            				$('#weight').prop('readonly', false); 
            			}
            		});



        $('#weight').on("keydown",function(e)
            {
            	var pattern = ['+','-','e','E'];
            	if(pattern.includes(e.key))
            		{
            			e.preventDefault();
            		}
            });
            		
        $('#btn').on("click",function()
            {
           
            	document.getElementById("fair").style.display = 'block';
            	var c = $('#type').val();
            	var w = $('#weight').val();
            	var d = $('#pick').val();
            	var p = $('#drop').val();
            		    // console.log(d);
            		    // console.log(p);
            		    // console.log(c);
            		    // console.log(w);




		if(($('#pick').val()=='PICKUP Location') && ($('#drop').val()=='DROP Location') && ($('#type').val()=='CAB Type'))
			{
				alert('please enter details');
								document.getElementById("fair").style.display = 'none';
			}


		else if($('#pick').val()=='PICKUP Location')

			{
				alert('please select your pickup location');
				document.getElementById("fair").style.display = 'none';
			}

		else if($('#drop').val()=='DROP Location')
			{
				alert('please select your drop location');
				document.getElementById("fair").style.display = 'none';
			}
		else if($('#type').val()=='CAB Type')
			{
				alert('please select cab type');
				document.getElementById("fair").style.display = 'none';
			}

		else if($('#weight').val() > 1000)
			{
				alert('weight must be less than 100');
				document.getElementById("fair").style.display = 'none';
			}

		else
			{                       
				$.ajax({

					
						url:'cab.php',
						type: "POST",
						data:
						   {
						        pick:d,
						        drop:p,
						        type:c,
						        weight:w,
						    },
						success: function(fair)
						    {
								

						         // $('#distance').html(data);
						         //       console.log(data);
						        $('#fair #fr').html(fair);
						        $('#fair #to').html('To:'+p);
						        $('#fair #typ').html('Cab Type:'+c);
						        $('#fair #frm').html('From:'+d);
						        console.log(fair);
						                                      
						    }
						});
			}
		});


		$('#book').on("click",function()
			{
				debugger;
				var c = $('#type').val();
            	var w = $('#weight').val();
            	var d = $('#pick').val();
            	var p = $('#drop').val();
				$.ajax({
						url:'cab_info.php',
						type:"POST",
						data:
						{
						    pick:d,
						    drop:p,
					        type:c,
					        weight:w,
						},
						success: function(data)
						{
							debugger;
						    console.log(data);
							alert('great');  
							                         
						}
						});
                        // var c=4;
						// var c=c+1;
						window.location.href = 'user_login.php';
						    
			});




						            		  
         


		$('#fa1').on("click",function()
		{

							document.getElementById("fair").style.display = 'none';
		})
// $('body').click(function() {

    
//      $('#fair').hide();
//     });

    });




          </script>
	</script>

</body>
</html>