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

$sql = $con->query("SELECT password FROM teacherregister WHERE email = '$email'");

$first = $sql->fetch_assoc();

$result = $first['password'];

if($result == $passcode1)
{
	if($passcode2 == $passcode3)
	{
		if($passcode2 == $passcode1)
		{
			echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 19px;'>New Password Cannot Be Same As Previous Password</h3><br>";?>
			<html>
				<div class = "col-12" align = "center">
					<br><h2><a href = "teacherpasswordreset.php?email=<?php echo $email;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!!</a></h2>
				</div>
			</html>	
   <?php
		}
		else
		{
			$sql1 = $con->query("UPDATE teacherregister SET password = '$passcode2' WHERE email = '$email'"); 
			echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 19px;'>Password Changed Successfully!!</h3><br>";?>
			<html>
				<div class = "col-12" align = "center">
					<br><h2><a href = "teacherindex.php?email=<?php echo $email;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;"><-- Dashboard</a></h2>
				</div>
			</html>	
<?php
		}
	}
	else
	{
		echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 19px;'>You Must Enter The Same Password Twice In Order To Confirm It.</h3><br>";?>
		<html>
			<div class = "col-12" align = "center">
				<br><h2><a href = "teacherpasswordreset.php?email=<?php echo $email;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!</a></h2>
			</div>
		</html>	
<?php	
	}
}

else
{
	echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 19px;'>Old Password Entered Incorrectly.</h3><br>";?>
	<html>
		<div class = "col-12" align = "center">
			<br><h2><a href = "teacherpasswordreset.php?email=<?php echo $email;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!</a></h2>
		</div>
	</html>	
<?php
}
?>
<html>
	<body>
	</body>
</html>
