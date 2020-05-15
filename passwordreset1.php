<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

$email = $_GET['email'];

$passcode1 = $_POST['oldpassword'];

$passcode2 = $_POST['newpassword1'];

$passcode3 = $_POST['newpassword2'];

$sql = $con->query("SELECT password FROM register WHERE username = '$email'");

$first = $sql->fetch_assoc();

$result = $first['password'];

if($result == $passcode1)
{
	if($passcode2 == $passcode3)
	{
		if($passcode2 == $passcode1)
		{
			echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 19px; color: #FDF6F6;'>New Password Cannot Be Same As Previous Password</h3><br>";?>
			<html>
				<div class = "col-12" align = "center">
					<br><h2><a href = "passwordreset.php?email=<?php echo $email;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!!</a></h2>
				</div>
			</html>	
   <?php
		}
		else
		{
			$sql1 = $con->query("UPDATE register SET password = '$passcode2' WHERE username = '$email'"); 
			echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 19px; color: #FDF6F6;'>Password Changed Successfully!!</h3><br>";?>
			<html>
				<div class = "col-12" align = "center">
					<br><h2><a href = "index.php?email=<?php echo $email;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;"><-- Dashboard</a></h2>
				</div>
			</html>	
<?php
		}
	}
	else
	{
		echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 19px; color: #FDF6F6;'>You Must Enter The Same Password Twice In Order To Confirm It.</h3><br>";?>
		<html>
			<div class = "col-12" align = "center">
				<br><h2><a href = "passwordreset.php?email=<?php echo $email;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!</a></h2>
			</div>
		</html>	
<?php	
	}
}

else
{
	echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 19px; color: #FDF6F6;'>Old Password Entered Incorrectly.</h3><br>";?>
	<html>
		<div class = "col-12" align = "center">
			<br><h2><a href = "passwordreset.php?email=<?php echo $email;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!</a></h2>
		</div>
	</html>	
<?php
}
?>
<html>
	<body style="background-color: #343A40">
	</body>
</html>
