<?php
session_start();
$v = $_SESSION['email'];
// $n = $_SESSION['name'];
// $m = $_SESSION['mob1'];
$server = "localhost";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password);
if(!$con)
{
    echo("connection failed".mysqli_connect_error());
}
$sql1 = "SELECT `name` from cab.tbl_user where email = '$v' ;";
$dis1=$con->query($sql1);
$row1 = mysqli_fetch_assoc($dis1);
$n = $row1['name'];
$sql2 = "SELECT `mobile` from cab.tbl_user where email = '$v' ;";
$dis2=$con->query($sql2);
$row2 = mysqli_fetch_assoc($dis2);
$m = $row2['mobile'];
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <style>
    body
    {
/*  background-color: #715a5a;*/
    }
    .c1
    {
      position: relative;
      transform: translate(0%,80%);
      border: 2px solid black;
      width: 300px;
      margin-left: 40%;
      height: auto;
      text-align: center;
     padding:30px;
    background-color: #ecece7;
     
      
/*      left: 50%;*/
          }





    
    .tab
    {
      float: right;

    }
    .frm
    {
     text-align: center;

    }

    .row1
    {
      display: flex;
    }


    .col1
    {
      border:1px solid black;
      width: 200px;
    }


  </style>
</head>
<body>
<div style="border: 2px solid red;height: 112px;">
<?php

echo include 'header.php';
// $v = $_SESSION['email'];
?>
</div>

<div style="height: auto;margin-top: 30px;">
  <h3 style="text-align:center;border-bottom:2px solid black;">YOUR'S  PROFILE</h3>
  <form  action="" method="post" style="padding:20px;">
        <input type="text" name="email" id="logemail" <?php echo 'value='.$v; ?> placeholder="email"><br>
        <input type="text" <?php echo 'value='.$n; ?>  placeholder="Name....." name="name1" id="name1" ><br>
        <input type="text" <?php echo 'value='.$m; ?> placeholder="Mobile....." name="mob1" id="mob1" ><br><br>
        <!-- <input type="password" placeholder="Enter Password" name="password" id="roll_no" ><br>
        <input type="password" placeholder="Repeat Password" name="pr" id="pr"><br> -->
        <button type="submit" class="signupbtn btn1" name="button1" id="button1" value="Create Account">Update Profile</button>
  </form>
</div>





<script>
  $(document).ready(function(){
    $('#button1').click(function(e)
    {

      e.preventDefault();
      $.ajax({
        method:'POST',
        url:'updateinfo2.php',
        data:$("form").serialize(),
        success:function(data)
        {
          debugger;
         
          console.log(data);
          alert('Profiles updated successfuly');
          
        }
      });
    });
  });
</script>






</body>
</html>