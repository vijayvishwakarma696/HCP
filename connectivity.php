<?php
function connection()
{
	$dbname="register";
	$dbusername="root";
	$dbpassword="";
	$dbhost="localhost";
	$conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
	return $conn;
}



?>
