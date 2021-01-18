<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title></title>
	<style>
		
header 
{
    position:fixed;
    width: 100%;
    height: 70px;
    z-index: 999;
    display: block;


}


.navbar {

    display: flex;
    background-color: #212529;
/*    justify-content: space-between;*/

}

  @media only screen and (min-device-width: 250px) and (max-device-width: 800px)

{



.nav-link
{
 color: #e4f90f;
  font-family: 'Poppins',sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 25px;
  line-height: 23px;
}

}




.nav-link
{
 color:white;
  font-family: 'Poppins',sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 15px;
  line-height: 23px;
}
.nav-item
{

padding-bottom: 10px;
}

.navbar-toggler-icon
{
  display: inline-block;
  width: 1.3em;
  height: 1.3em;
  vertical-align: middle;
  background:no-repeat center center;
  background-size: 100% 100%;
}

.navbar-toggler
{
  padding: .25rem .75rem;
  font-size: 1.25rem;
  line-height: 1;
  color: red;

}

.navbar1 .navbar-toggler
{
  border-color: #fff;
    background-color: #fff;
    height: 36px;
    outline: none;
    border-radius: 0px;
    position: absolute;
    right: 20px;

    top: 25px;
}
.navbar-collapse
{
  
  align-items: center;
  text-align: center;
}


.navbar1 .navbar-toggler-icon:after
{
  content: '\f0c9';
  color: #f33f3f;
  font-size: 18px;
  line-height: 26px;
  font-family: 'fontAwesome';
}

.nav-link:hover
{
	color: yellow;
}

ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}


    header h2
     {
  
    font-size: 1em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    font-weight: bold;
   
    font-family: 'Poppins',sans-serif;
    font-style:normal;
    line-height: 29px;
    color:yellow;




}

.log
{
  color: red;
  font-size: 45px;
}
.log:hover
{
  color:yellow;
  cursor: pointer;
}



.car1
{

  font-size:48px;
  color:white;
}
.car1:hover
{
  color:yellow;
}
.h
{
  padding-bottom: 100px;
}



	</style>
</head>
<body>


	<header class="h">
  
<nav class="navbar navbar1 navbar-expand-lg">
  <div class="container">
  
    <a class="navbar-brand">
    <h2 class="white-font"><i class="fa fa-car car1" style=""></i> <span class="log">C<span><span style="color: yellow;font-size: 28px;">EDCAB</span></h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="signup.php">Sign Up</a>
    </li>

    <li class="nav-item">
      <a class="nav-link active" href="admin.php">Log In</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
   
  </ul>
 
</div>
</div>
</nav>


</header>

</body>
</html>