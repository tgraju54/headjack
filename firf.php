<?php
include 'parray.php';


function getNprice($pid)
{$n=$pid;
include 'crdbms.php';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pcatlog WHERE pid=$n";




$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	
	
	
	$pqr=$row['nprice'];
	return $pqr;
	
	



	
 }
} else {
    echo "0 results";
}}
function getPic($pid)
{$n=$pid;
include 'crdbms.php';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pcatlog WHERE pid=$n";




$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	
	
	
	$pqr=$row['pic'];
	return $pqr;
	
	



	
 }
} else {
    echo "0 results";
}}
function getName($pid)
{$n=$pid;
include 'crdbms.php';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pcatlog WHERE pid=$n";




$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	
	
	
	$pqr=$row['pname'];
	return $pqr;
	
	



	
 }
} else {
    echo "0 results";
}}










?>