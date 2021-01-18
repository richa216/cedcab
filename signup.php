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

?>
</div>
<div style="border: 2px solid red;height: auto;margin-top: 30px;">

  <form  action="" method="post">
          <input type="text" name="email" id="logemail" placeholder="email"><br>
        <input type="password" name="password" id="password" placeholder="password"><br>
        <input type="submit" name="button2" id="button2" value="Login">
  </form>
</div>





<script>
  $(document).ready(function(){
    $('#button2').click(function(e)
    {

      e.preventDefault();
      $.ajax({
        method:'POST',
        url:'signin.php',
        data:$("form").serialize(),
        success:function(data)
        {
          debugger;
         
          console.log(data);
          if(data==0)
          {
            window.location.href = 'admin_login.php';
          }
          else if(data==1)
          {
            
            window.location.href = 'user_login.php';
          }
          else{
            alert('login failed');
          }
          
        }
      });
    });
  });
</script>






</body>
</html>