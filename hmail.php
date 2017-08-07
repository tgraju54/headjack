<?php

function hmaill($idd,$email)
{ include 'crdbms.php';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hmail WHERE id=$idd";
$tesult = $conn->query($sql);

if ($tesult->num_rows > 0) {
  
   // output data of each row
    while($jow = $tesult->fetch_assoc()) {
$to = $email;
   $from = "accounts@rtgstudios.in";
   $subject = =$row['subject'];
   



$message=$row['msg'];
    
    












   



   



$header = "RTGS ACCOUNTS \r\n";
   $retval = mail ($to,$subject,$message,"From: $from\n");





}}
	
else {
    echo" No Results To Display";
}
}
hmaill(1,"tgraju54@gmail.com");

?>