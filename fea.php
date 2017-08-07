<style>

.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0px;
  font-family: Arial;
  color: #ffffff;
  font-size: 14px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

.holdpla
{
position:absolute;
top:100px;
left:30px;
}

.places{
position:relative;
top:350px;
left:90px;
}
.gett
{
position:absolute;
top:80px;
left:120px;
}








input#gobutton{
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding:5px 25px; /*add some padding to the inside of the button*/
background:#35b128; /*the colour of the button*/
border:1px solid #33842a; /*required or the default border for the browser will appear*/
/*give the button curved corners, alter the size as required*/
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
/*give the button a drop shadow*/
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
/*style the text*/
color:#f3f3f3;
font-size:1.1em;
}
/***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
input#gobutton:hover, input#gobutton:focus{
background-color :#399630; /*make the background a little darker*/
/*reduce the drop shadow size to give a pushed button effect*/
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}
</style>
<?php

include 'header.php';


?><title>Best Deals</title><br><Br><BR><BR><BR>
<div class="jumbotron">
  <h1>Headjack Best Deals</h1> 
  <p>Here We Bring Out Best Deals For You To Fit Your Buget And Give Your Great Music Expirence</p> 
</div>




<?php
include 'crdbms.php';

echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></center>";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pcatlog WHERE fea=2 ";
$tesult = $conn->query($sql);
echo"<div class=holdpla>";
if ($tesult->num_rows > 0) {
    // output data of each row
    while($jow = $tesult->fetch_assoc()) {
	$pid=$jow['pid'];
	$name=$jow['pname'];
	$ratings=$jow['ratings'];
	$nprice=$jow['nprice'];
	$olprice=$jow['olprice'];
	$per=$jow['per'];
	$f1=$jow['f1'];
	$f2=$jow['f2'];
	$f3=$jow['f3'];
	$edeliver=$jow['edeliver'];
	$location=$jow['location'];
	$seller=$jow['seller'];
	$ithebox=$jow['ithebox'];
	$brand=$jow['brand'];
	$brandid=$jow['brandid'];
	$productt=$jow['productt'];
	$type=$jow['type'];
	$model=$jow['model'];
	$cordlength=$jow['cordlength'];
	$descp=$jow['descp'];
	$review=$jow['review'];
	$pic=$jow['pic'];
	$warr=$jow['warr'];
	$warrr=$jow['warrr'];
	$color=$jow['color'];
	$stock=$jow['stock'];
	
	echo"<br><BR>";
	echo"<br><BR>";
	echo"<div class=places>";
	echo"<img src=$pic height=100 width=100>";
	
	echo"<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$name </b><br><BR>";
	echo"<div class=gett>";
	echo"Rs $nprice <font color=green>($per)</font><br><br>";
	echo"<a href=pcatlog.php?pid=$pid><input class=btn type=submit value=Details /></a>";
	
	echo"<br><BR>";
	echo"</div>";
	echo"</div>";
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}
	echo"</div>";
	
	}
	else
	{
	echo" no results found";
	}
	
	
	
	?>
	
	