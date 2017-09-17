<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'register'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
  
 function SignIn() {
	 session_start();
	 
	 if(!empty($_POST['user']))
		 
		 {
			 $query = mysql_query("SELECT * FROM signup_details where email = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
			 $row = mysql_fetch_array($query);
			 if(!empty($row['email']) AND !empty($row['password'])) 
			 {
				 $_SESSION['email'] = $row['password'];
				 include 'Success-Login.html';
			 }
			 
			 else{
				 include 'Wrong-U-P.html';
				}
				return false;
			 }
			 return true;
		
				 } 
				 if(isset($_POST['submit']))
					 {
						 SignIn(); 
						 }
?>
