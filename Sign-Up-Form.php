<?php
require 'connectivity.php';
$cname=connection();

$name    =$cname->real_escape_string($_POST['name']);
$email   =$cname->real_escape_string($_POST['email']);
$password=$cname->real_escape_string($_POST['password']);

$query   = "INSERT into signup_details (name,email,password) VALUES('" . $name . "','" . $email . "','" . $password . "')";

$success = $cname->query($query);
if (!$success) {
    die("Couldn't enter data: ".$cname->error);

}

include 'Success-Signup.html';

$cname->close();
 

?>
