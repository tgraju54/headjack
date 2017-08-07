


<style>
.rambo
{
position:absolute;
left:450px;
top:200px;
}
.grow img {
  height: 300px;
  width: 300px;
 
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
 
.grow img:hover {
  width: 400px;
  height: 400px;
}




</style>


<?php
include 'header.php';
include 'crdbms.php';
$pid=$_REQUEST['pid'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pcatlog WHERE pid=$pid";
$tesult = $conn->query($sql);

if ($tesult->num_rows > 0) {
    // output data of each row
    while($jow = $tesult->fetch_assoc()) {
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
	if($stock<=0)
	{
	$stext="<font color=red>Out Of Stock</font>";
	}
	else
	{
	$stext="<font color=Green>In Stock</font>";
	}
	}}
	
else {
    echo" No Results To Display";
}







?>



<?php
echo"<title>Headjack|$name</title>";
echo"<meta name=description content=$descp>";
echo"<meta name=keywords content=headjack,inda,heaphone,earphone ,$name>";
echo"<meta name=author content=priyanshu kumar>";




?>
</center><br /><BR /></br><br /><BR />


<?php
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class=grow pic><img src=$pic></div> &nbsp;";
?>
<div class="rambo">
<?php
echo"<b><h3>$name</h3></b><br>";
for($i=0;$i<$ratings;$i++)
{
echo"<img src=star.gif  height=20 width=20>";
}
echo"<br><br>";
echo"<b><s><font size=6 color=grey> Rs $olprice</s></b></font>&nbsp;&nbsp;&nbsp;<b><font size=8> Rs $nprice</b>&nbsp;&nbsp;&nbsp;<b><font size=4 color=green>($per)</b></font><br>";
echo"<font size=2 face=arial color=green>";
echo"-Free Shipping &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expected Delivery : $edeliver.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$stext";
echo"</font><br>";
echo"<font size=2 face=arial><br>";
echo"- $f1";
echo"<br><br>";
echo"- $f2";
echo"<br><br>";
echo"- $f3";
echo"<br>";
echo"<br>";
?>


<a href="login/aacart.php?pid=<?php echo $pid; ?>" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-circle-arrow-right"></span> Add To cart </a>&nbsp;&nbsp;&nbsp;
<a href="login/acart.php?pid=<?php echo $pid; ?>" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> Buy Now</a>

</div>

<br /><BR />
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Genral</a></li>
  <li><a data-toggle="tab" href="#menu1">Technical</a></li>
  <li><a data-toggle="tab" href="#menu2">Warranty</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Description</h3>
    <p><?php echo"<pre>$descp</pre>"; ?></p>
  </div>
  <div id="menu1" class="tab-pane fade">
  <br /><BR />
   <font  size="2"><b>    In The Box:</b> <?php echo"$ithebox"; ?> <br  /><br />
   <font  size="2"><b>    Brand:</b> <?php echo"$brand"; ?> <br  /><br />
    <font  size="2"><b>    Product type:</b> <?php echo"$productt"; ?> <br  /><br />
	 <font  size="2"><b>    Model:</b> <?php echo"$model"; ?> <br  /><br />
	 <font  size="2"><b>   Cordlength:</b> <?php echo"$cordlength"; ?> <br  /><br />
	 <font  size="2"><b>    Expected Delivery:</b> <?php echo"$edeliver"; ?> <br  /><br />
	 <font  size="2"><b>    Color:</b> <?php echo"$color"; ?> <br  /><br />
   
 </div>
  <div id="menu2" class="tab-pane fade">
    Warranty:</b> <?php echo"$warr"; ?> <br  /><br />
	Region:</b> <?php echo"$warrr"; ?> <br  /><br />
  </div>
</div>


<?php
include 'footer.php';
?>







