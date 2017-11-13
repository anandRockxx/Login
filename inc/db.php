<?php 

$serverName = "localhost";
$userName = "root";
$password = "root_user";
$dbName = "loginsystem";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if (!$conn) {
	die("connection failed. ". mysqli_connect_error());
}
 echo "connected successfully.";

 ?>