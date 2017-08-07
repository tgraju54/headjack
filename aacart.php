<?php
require_once('auth.php');
$user=$_SESSION['userid'];
$date=date("l:d:M:Y(h:i:s)");
include 'crdbms.php';
$apid=$_REQUEST['pid'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO cart(userid,proid,date)
VALUES ('$user','$apid','$date')";

if ($conn->query($sql) === TRUE) {
echo"<script>
    alert(I am an alert box!");

</script>";
    header("location:javascript://history.go(-1)");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();







?>