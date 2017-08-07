

<?php


include'crdbms.php';

?>
<link rel="shortcut icon" href="logow.jpg" type="image/x-icon"/>
<!DOCTYPE html>
<html lang="en">
<style>
.hold
{
position:absolute;
right:0px;
}
.holdl
{
position:absolute;
left:30px;
}
.holdc
{
position:relative;
top:110px;
}
.holdb
{
position:absolute;
top:640px;
left:440px;
}
.fp
{
position:absolute;
top:730px;
left:240px;
}


</style>


<head>
<link rel="SHORTCUT ICON" href="rtg.ico"/>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  </head>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.rtgstudios.in/headjack/">Headjack </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://www.rtgstudios.in/headjack/">Home</a></li>
        <li class="dropdown" class="active" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="active">Headphones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
			$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hfeel WHERE type=1";




$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	$pname=$row['pname'];
	$pid=$row['pid'];
	
	echo "<li><a href=pcatlog.php?pid=$pid>$pname</a></li>";
	
		
 }
} else {
     echo "<li><a href=#>Out Of Stock</a></li>";
}		
			
			
			
			?>
          </ul>
        </li>
        <li><a class="dropdown-toggle" data-toggle="dropdown" a href="#">Earphones<span class="caret"></span></a>
		<ul class="dropdown-menu">
            
			<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hfeel WHERE type=2";




$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	$pname=$row['pname'];
	$pid=$row['pid'];
	
	echo "<li><a href=pcatlog.php?pid=$pid>$pname</a></li>";
	
		
 }
} else {
    echo "<li><a href=#>Out Of Stock</a></li>";
}		
			
			
			
			?>
           
          </ul>
		</li>
        
		
		 <li><a class="dropdown-toggle" data-toggle="dropdown" a href="#">Wired<span class="caret"></span></a>
		<ul class="dropdown-menu">
            <?php
			$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hfeel WHERE type=2";




$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	$pname=$row['pname'];
	$pid=$row['pid'];
	
	echo "<li><a href=pcatlog.php?pid=$pid>$pname</a></li>";
	
		
 }
} else {
     echo "<li><a href=#>Out Of Stock</a></li>";
}		
			
			
			
			?>
			
          </ul>
		</li>
		 <li><a class="dropdown-toggle" data-toggle="dropdown" a href="#">Best Deals<span class="caret"></span></a>
		<ul class="dropdown-menu">
            <?php
			$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hfeel WHERE type=4";




$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	$pname=$row['pname'];
	$pid=$row['pid'];
	
	echo "<li><a href=pcatlog.php?pid=$pid>$pname</a></li>";
	
		
 }
} else {
    echo "<li><a href=#>Out Of Stock</a></li>";
}		
			
			
			
			?>
          </ul>
		</li>
		
		 <li><a class="dropdown-toggle" data-toggle="dropdown" a href="#">Our Policies <span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="login/about/refund.html">Return Policy</a></li>
			<li><a href="login/about/privacy.html">Privacy Policy</a></li>
			<li><a href="login/about/shop.pdf">Shopping Expirience</a></li>
          </ul>
		</li>
		 <li><a class="dropdown-toggle" data-toggle="dropdown" a href="#">Support Center <span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="http://www.rtgstudios.in/helpdesk/headjack/">Visit Support Center</a></li>
            <li><a href="login/contact/">Contact Us</a></li>
            
          </ul>
		</li>
		 <li><a class="dropdown-toggle" data-toggle="dropdown" a href="#">Order Status<span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="login\ostatc.php">Get Order Status</a></li>
           
          </ul>
		</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login/main.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="hold">
<ul class="nav navbar-nav">
								<li><a href="login/admin"><span class="glyphicon glyphicon-user"></span> Account</a></li>
								<li><a href="login/redir.php
								"><i class="glyphicon glyphicon-star"></i> Checkout</a></li>
								
								<li><a href="login/cart.php"><i class="glyphicon glyphicon-shopping-cart"></i> Cart</a></li>
								
							</ul></div>
							<div class="holdl">
							<img src="logow.jpg">
</div>
<br><center>
<div class="container">
    
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <form action="spro.php" class="search-form" method="get">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="keyword" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
    </div>
</div>
 

