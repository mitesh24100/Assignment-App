<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

$name = $_POST['name'];
$surname = $_POST['surname'];
$class = $_POST['class'];
$roll = $_POST['roll'];
$email = $_POST['email'];
$passcode = $_POST['password'];
$vkey = rand(000000,999999);

if($class == 'Null')
{
	echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px; color: #FDF6F6;'>Please Select Your Class.</h3><br>";
}
else
{
	$confirm = $con->query("SELECT Username FROM register WHERE Username = '$email'");

	if($confirm->num_rows == 1)
		{
			echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px; color: #FDF6F6;'>Email Already Exists.Try Registering With Different Email.</h3><br>";?>
			<div class = "col-12" align = "center">
				<br><h2><a href = "register.php" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;">Go Back!</a><h2>
			</div>
	<?php
		}

	else
		{
			$sql = "INSERT INTO register (Name,Surname,Class,RollNo,Username,Password,vkey) VALUES ('$name','$surname','$class','$roll','$email','$passcode','$vkey')";


			if($con->query($sql))
				{
					$to = $email;
					$subject = "Email Verification";
					$message = "<p>On Clicking On The Below Link, You Would Be Verifying Your Account And Thereby Be Redirected To Login Page.</p><br><a href='http://localhost/Assignment App/verify.php?vkey=$vkey'><h3>Click Here To Verify</h3></a><br>";
					$headers = "From: miths.tcet@gmail.com \r\n";
					$headers .= "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset = UTF-8" . "\r\n";
					mail($to,$subject,$message,$headers);
					header('location:thankyou.php');
				}

			else
				{
					echo $con->error;
				}
		}
}

?>
<html>
	<body style="background-color: #343A40">
	</body>
</html>
