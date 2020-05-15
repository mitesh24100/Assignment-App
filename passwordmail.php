<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

$email = $_POST['email'];

$sql = $con->query("SELECT password FROM register WHERE username = '$email'");

$result = $sql->fetch_assoc();

$final = $result['password'];

if($sql == TRUE)
{
	$to = $email;
	$subject = "Forgot Password";
	$message = "Your Existing Password is $final ";
	$headers = "From: miths.tcet@gmail.com \r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset = UTF-8" . "\r\n";
	mail($to,$subject,$message,$headers);
}
?>
<html>
<body style="background-color: #343A40">
	<br><h1 align = "center" style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Your Password Has Been Sent To your Email. You Can Use The Same Password To Login.</h1>
	<div class = "container">
		<div class = "row">
			<div class = "col-12" align = "center">
	    	<br><h3><a href = "Login.php" style = "font-family: monospace; font-size: 19px; text-decoration: none; color: #007BFF;">Go To Login Page!</a></h3>
	    	</div>
	    </div>
	</div>
</body>
</html>