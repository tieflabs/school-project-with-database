<?php 

$host = "localhost";
$dbname = "c-shop_db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
	                 username: $username,
	                 password: $password,
	                 database: $dbname);

if ($mysqli->connect_errno) {
	die("Connection error: " . $mysqli->connect_error);
	// code...
}
return $mysqli;
?>

<!-- flask -->
<!-- junger -->
