<?php
if(isset($_GET['vkey']))
{

	$vkey = $_GET['vkey'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	$con = new mysqli ($servername, $username, $password, $dbname);

	$sql = $con->query("SELECT verified, vkey FROM register WHERE verified = 0 AND vkey = '$vkey'");

	if($sql->num_rows == 1)
	{
		$update = $con->query("UPDATE register SET verified = 1 WHERE vkey = '$vkey'");

		if($update)
		{
			header('location:database.php');
		}
		else
		{
			echo $con->error;
		}
	}
	else
	{
		echo "<br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px; color: #FDF6F6;'>The Email Is Invalid Or Has Been Already Verified!</h3><br>";
	}
}
else
{
	die("<html><body style = 'background-color: #343A40'><br><h3 align = 'center' style = 'font-family: monospace; font-size: 25px; color: #FDF6F6;'>Something Went Wrong!</h3></body></html>");
}
?>
<html>
	<body style="background-color: #343A40">
	</body>
</html>