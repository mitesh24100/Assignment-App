<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);
$abc = $_POST["Class"];
$results0= $con->query("SELECT ClassId FROM Classes WHERE Class = '$abc'");
$results1= $con->query("SELECT Subject FROM Subject WHERE ClassId = '$results0' AND TeacherId='1'");
?>
	<option value="">Select your subject</option>
<?php
	foreach($results1 as $results) {
?>
	<option value="<?php echo $results["Subject"]; ?>"><?php echo $results["Subject"]; ?></option>
<?php

}
?>