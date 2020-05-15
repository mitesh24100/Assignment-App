<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

$email = $_POST['email'];
$passcode = $_POST['password'];

$sql1 = $con->query("SELECT Email FROM teacherregister WHERE Email = '$email'");

$sql2 = $con->query("SELECT * FROM teacherregister WHERE Email = '$email' AND password = '$passcode'");

$sql3 = $con->query("SELECT Email FROM teacherregister WHERE Email = '$email' AND verified = '1'");

if($sql1->num_rows == 1)
{
	if($sql3->num_rows == 1)
	{
		if($sql2->num_rows == 1)
		{
			header('location:testing.php?email='. $email .'');
		}
		else
		{
			echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px;'>Your Username And Password Do Not Match!</h3><br>";?>
			<div class = "col-12" align = "center">
				<br><h2><a href = "teacherlogin.php" style = "font-family: monospace; font-size: 25px; text-decoration: none;">Go Back!</a><h2>
			</div>
		<?php
		}
	}
	else
	{
		echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px;'>Please Verify Your Account</h3><br>";?>
		<div class = "col-12" align = "center">
				<br><h2><a href = "teacherlogin.php" style = "font-family: monospace; font-size: 25px; text-decoration: none;">Go Back!</a><h2>
		</div>
	<?php
	}
} 
else
{
	echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px;'>Please Register Your Account First</h3><br>";?>
	<div class = "col-12" align = "center">
				<br><h2><a href = "teacherlogin.php" style = "font-family: monospace; font-size: 25px; text-decoration: none;">Go Back!</a><h2>
		</div>
<?php
}
?>
<html>
	<body>
	</body>
</html>