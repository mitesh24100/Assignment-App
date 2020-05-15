<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

$email = $_POST['email'];
$passcode = $_POST['password'];

$sql1 = $con->query("SELECT username FROM register WHERE username = '$email'");

$sql2 = $con->query("SELECT * FROM register WHERE username = '$email' AND password = '$passcode'");

$sql3 = $con->query("SELECT username FROM register WHERE username = '$email' AND verified = '1'");

if($sql1->num_rows == 1)
{
	if($sql3->num_rows == 1)
	{
		if($sql2->num_rows == 1)
		{
			header('location:index.php?email='. $email .'');
		}
		else
		{
			echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px; color: #FDF6F6;'>Your Username And Password Do Not Match!</h3><br>";?>
			<div class = "col-12" align = "center">
				<br><h2><a href = "login.php" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!</a><h2>
			</div>
		<?php
		}
	}
	else
	{
		echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px; color: #FDF6F6;'>Please Verify Your Account</h3><br>";?>
		<div class = "col-12" align = "center">
				<br><h2><a href = "login.php" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!</a><h2>
		</div>
	<?php
	}
} 
else
{
	echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px; color: #FDF6F6;'>Please Register Your Account First</h3><br>";?>
	<div class = "col-12" align = "center">
				<br><h2><a href = "login.php" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!</a><h2>
		</div>
<?php
}
?>
<html>
	<body style="background-color: #343A40">
	</body>
</html>