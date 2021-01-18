<!DOCTYPE html>
<html>
<head>
  <title></title>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
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

input[type=text], input[type=password] {
  width: 60%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  /* opacity: 0.9; */
}
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
 
  width: 60%;
}







@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

    
   


  


  </style>
"name1"
</head>
<body>
<div style="border: 2px solid red;height: 112px;">
<?php

echo include 'header.php';

?>
</div>



<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="">
        <input type="text" id="opt" name="opt" value="opt" placeholder="Enter your otp"></input>

<input type="submit" id="verify" value="verify Email" name="verify"></input><br>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<div class="container">
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="">
        <input type="text" id="opt1" name="opt1" value="opt1" placeholder="Enter your otp"></input>

<input type="submit" id="verify2" value="verify Email" name="verify2"></input><br>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<div style="border: 2px solid red;height: auto;margin-top: 30px;">
  <form  action="" method="post" style="border:1px solid #ccc">
  <div class="container">

    <b>Username</b><br>
    <input type="text" placeholder="Username....." name="email" id="email" ><input type="submit" id="verify1" value="Send OTP"  class="btn btn-success btn-md"  name="send"></input><br>
 

     <b>Name</b><br>
    <input type="text"  placeholder="Name....." name="name1" id="name1" >
    <input type="text" placeholder="Mobile....." name="mob1" id="mob1" ><input type="submit" id="verify3" value="Send OTP"  class="btn btn-success btn-md "  name="send1"></input><br>

  <b>Password</b><br>
    <input type="password" placeholder="Enter Password" name="password" id="roll_no" ><br>
   <b>Repeat Password</b><br>
    <input type="password" placeholder="Repeat Password" name="pr" id="pr"><br>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
     <p><a href="signup.php" style="color:dodgerblue">already have an account? Login here</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn btn1" name="button1" id="button1" value="Create Account">Sign Up</button>
    </div>
  </div>
</form>

</div>








<div style="border: 2px solid red;height: auto;margin-top: 5vw;">
          <?php
    require 'footer.php';
    ?>
</div>
<!-- 
<div  class="container-fluid">

<table class="table">
<thead>
<tr>
 
  <th scope="col">Email</th>
  <th scope="col">Password</th>

</tr>
</thead>

<tbody> -->Security Question






<script>
  $(document).ready(function(){
    //insert data
    $('#button1').click(function(e)
    {
      debugger;
      e.preventDefault();
      t = $('#roll_no').val(); 
      y = $('#pr').val();
      console.log(y);
      console.log(t);
      if(t==y)
      {
        $.ajax({
        method:'POST',
        url:'reg.php',
        data:$("form").serialize(),
        success:function(data)
        {
          alert('login successfuly');
          console.log(data);
          window.location.href = 'signup.php';
        }
      });
      }
      else{
        alert('password doesnt match');
      }

      

    });

    //email otp
    $('#verify1').click(function(e)
    {
      e.preventDefault();
      debugger;
      x = $('#email').val();
      console.log(x);
      $.ajax({
        method:'POST',
        url:'email_otp.php',
        data:{email:x},
        success:function(data1)
        {
         
          console.log(data1);
        }
        
      });
      $('#myModal').modal('show'); 
      
    });

    //contact otp

    $('#verify3').click(function(e)
    {
      e.preventDefault();
      debugger;
      c = $('#mob1').val();
      console.log(c);
      $.ajax({
        method:'POST',
        url:'sms.php',
        data:{contact:c},
        success:function(data3)
        {
         
          console.log(data3);
        }
        
      });
      $('#myModal1').modal('show'); 
      
    });
 
    // email verification
  $('#verify').click(function()
      {
        debugger;
        m = $('#opt').val();
        console.log(m);
        $.ajax({
        method:'POST',
        url:'email_ver.php',
        data:{opt:m},
        success:function(data2)
        {
          console.log(data2);
        }  
      });
      });

    });
</script>
</body>
</html>