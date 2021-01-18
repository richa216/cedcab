<?php

// $arr = [
// 	      "Charbagh"  => 0,
//           "Indira Nagar" => 10,
//           "BBD"       => 30,
//           "Barabanki" => 60,
//           "Faizabad"  => 100,
//           "Basti"     => 150,
//           "Gorakhpur" => 210
//       ];



// extract($_POST);
// $z = $arr[$pick];
// $y = $arr[$drop];
$x=0;
$weight = $_POST['weight'];
$pick = $_POST['pick'];
$drop = $_POST['drop'];
$type = $_POST['type'];
$_SESSION['pick']=$pick;
$_SESSION['drop']=$drop;
$_SESSION['type']=$type;

$pick1 =   $_SESSION['pick'];
$drop1 =   $_SESSION['drop'];
$type1 =   $_SESSION['type'];


$server = "localhost";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password);
if(!$con)
{
  echo("connection failed".mysqli_connect_error());
}


$m = "SELECT `distance` FROM cab.tbl_location  WHERE `name` = '$pick1' and `is_available` = '1' ";
$dis5 = $con->query($m);
$data = mysqli_fetch_assoc($dis5);
$n = "SELECT `distance` FROM cab.tbl_location WHERE `name` = '$drop1' and `is_available` = '1' ";
$dis4 = $con->query($n);
$data1 = mysqli_fetch_assoc($dis4);
$y = $data['distance'];
$z = $data1['distance'];

if($y>$z)
{
$distance = $y-$z;
}
else
{
  $distance = $z-$y;
}
echo $distance;









	function cedmicfair()
{
	global $distance;
		
	global $x;
	
		if($distance<=10)
		{
			$x = $x+50+(13.5)*$distance;
	
		}


		elseif ($distance>10 and $distance<=50) 
		{
			$x = $x+50+13.5*10+((12)*($distance-10));
		  
		}


	    elseif ($distance>=50 and $distance<=100) 
	    {


	    	$x = $x+50+13.5*10+12*50+((10.2)*($distance-60));	
	    }



	     elseif ($distance>100 and $distance<=160 )
	    {
	     	$x =$x+ 50+13.5*10+12*50+10.2*($distance-60);
	     	
	    }
       elseif ($distance>160)
       {
              $x =$x+ 50+13.5*10+12*50+10.2*100+((8.5)*($distance-160));
       }
     


   
 echo 'Calculated Fair:'. $x;

}
    




function cedminfair()
{


  global $x;
  global $distance;
			if($distance<=10)
		{
  
            $x = 
     $x+ 150+(14.5)*$distance;
  
	

		}


		elseif ($distance>10 and $distance<=50) 
		{
     
   

			$x = $x+150+14.5*10+((13)*($distance-10));
  
		      
   
     
		}


	  elseif ($distance>=50 and $distance<=100) 
	 {
      $x = $x+ 150+14.5*10+13*50+((11.2)*($distance-60));	

}
   elseif ($distance>100 and $distance<=160 )
	    {
	     	$x = $x+150+14.5*10+13*50+11.2*($distance-60);
	     		
	    }
   elseif ($distance>160)
   {
      $x = $x+150+14.5*10+13*50+11.2*100+((9.5)*($distance-160));
   }
    
   

   
 echo 'Calculated Fair:'. $x;
  
	}



function cedroyal()
{
  global $x;
  global $distance;
if($distance<=10){
    $x = 
    $x+  200+(15.5)*$distance;
  }

  elseif ($distance>10 and $distance<=50)  {
  
      $x = $x+ 200+15.5*10+((14)*($distance-10));
}

    elseif ($distance>=50 and $distance<=100) 
   {
     
            $x = $x+ 200+15.5*10+14*50+((12.2)*($distance-60)); 

}

  elseif ($distance>100 and $distance<=160 )
      {
          $x = $x+200+15.5*10+14*50+12.2*($distance-60);
          
      }
      elseif ($distance>160)
      {
        $x = $x+200+15.5*10+14*50+12.2*100+((10.5)*($distance-160));
      }
           
   
 echo 'Calculated Fair:'. $x;
}



function cedSVV()
{
  global $x;
  global $distance;
if($distance<=10){
    $x = 
     $x+250+(16.5)*$distance;
  }

  elseif ($distance>10 and $distance<=50)  {
  
      $x = $x+ 250+16.5*10+((15)*($distance-10));
}

    elseif ($distance>=50 and $distance<=100) 
   {
      $x = $x+250+16.5*10+15*50+((13.2)*($distance-60)); 

}

   elseif ($distance>100 and $distance<=160 )
      {
        $x = $x+ 250+16.5*10+15*50+13.2*($distance-60);
          
      }
  elseif ($distance>160)
      {
       
         $x = $x+ 250+16.5*10+15*50+13.2*100+((11.5)*($distance-160));
      }

   
 echo 'Calculated Fair:'. $x; 
    
}
 
if($type=='Cedmini')
{
  cedminfair();
    if($weight>0)
  {
   totalfare();
  }
}



if($type=='Cedmicro')

{
  cedmicfair();

}


if($type=='Cedroyal')
{
  cedroyal();
  if($weight > 0)
  {
   totalfare();
  }


}

if($type=='CedSV')
{
  cedSVV();
  if($weight>0)
  {
   totalfare2();
  }
}


function totalfare()
{
  global $weight;
  global $x;
  if($weight<=10)
  {
    $x=$x+50;
  }
   elseif (10 < $weight and $weight <= 20)
   {
        $x=$x+100;
   }
     elseif ($weight>20)
     {
       $x=$x+200;
     }
  echo "<br>";
  echo 'Total Fair with luggage:'.$x;
}




function totalfare2()
{
  global $weight;
  global $x;
  if($weight<=10)
  {
    $x=$x+100;
  }
  elseif (10 < $weight and $weight <= 20)
   {
        $x=$x+200;
   }
  elseif ($weight > 20)
  {
    $x=$x+400;
  }
  echo "<br>";
  echo 'Total Fair with luggage:'.$x;

}


 
?>