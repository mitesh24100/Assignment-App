<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

$date = $_POST['date'];
$class = $_POST['class'];
$subject = $_POST['second'];

if($class == 'SE-IT-A' && $subject == 'DBMS')
{
	include("seitadbms.php");
}
else if($class == 'SE-IT-A' && $subject == 'DSA')
{
	include("seitadsa.php");
}
elseif($class == 'SE-IT-B' && $subject == 'DBMS')
{
	include("seitbdbms.php");
}
elseif($class =='SE-IT-B' && $subject == 'DSA')
{
	include("seitbdsa.php");
}
elseif($class == 'TE-IT-A' && $subject == 'CNS')
{
	include("teitacns.php");
}
elseif($class =='TE-IT-A' && $subject == 'ADMT')
{
	include("teitaadmt.php");
}
elseif($class == 'TE-IT-B' && $subject == 'CNS')
{
	include("teitbcns.php");
}
elseif($class =='TE-IT-B' && $subject == 'ADMT')
{
	include("teitbadmt.php");
}
?>
