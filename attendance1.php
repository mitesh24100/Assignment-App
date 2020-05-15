<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

$first = $_GET['email'];
$second = $_GET['class'];
$third = $_GET['fname'];
$fourth = $_GET['rollno'];

$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];

$sql = $con->query("SELECT Subject FROM `$second`");

$array = array();

foreach($sql as $out)
{
$res = $out['Subject'];
array_push($array, $res);
}

$try0 = $con->query("SELECT tablename FROM `$second` WHERE Subject = '$array[0]'");
$end0 = $try0->fetch_assoc();
$end = $end0['tablename'];

$try1 = $con->query("SELECT tablename FROM `$second` WHERE Subject = '$array[1]'");
$end1 = $try1->fetch_assoc();
$ends = $end1['tablename'];

$sql1 = $con->query("SELECT COUNT(DISTINCT(Date)) AS TOTAL1 FROM $end WHERE Name = '$third' AND RollNo = '$fourth' AND attendance_status = 'Present' AND Date BETWEEN '$startdate' AND '$enddate'");
$sql2 = $con->query("SELECT COUNT(DISTINCT(Date)) AS TOTAL2 FROM $end WHERE Date BETWEEN '$startdate' AND '$enddate'");

$sql3 = $con->query("SELECT COUNT(DISTINCT(Date)) AS TOTAL1 FROM $ends WHERE Name = '$third' AND RollNo = '$fourth' AND attendance_status = 'Present' AND Date BETWEEN '$startdate' AND '$enddate'");
$sql4 = $con->query("SELECT COUNT(DISTINCT(Date)) AS TOTAL2 FROM $ends WHERE Date BETWEEN '$startdate' AND '$enddate'");

$res1 = $sql1->fetch_assoc();
$res2 = $sql2->fetch_assoc();
$res3 = $sql3->fetch_assoc();
$res4 = $sql4->fetch_assoc();
?>


<html>
	<head>
	  <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
		<body>
			<table class="table table-stripped">
				<tr>
					<th>Serial No.</th>
					<th>Subject</th>
					<th>Total Lectures Attended</th>
					<th>Total Lectures</th>
					<th>Percentage</th>
				</tr>
				<tr>
					<td>1.</td>
					<td><?php echo $array[0]; ?></td>
					<td><?php echo $res1['TOTAL1'];?></td>
					<td><?php echo $res2['TOTAL2'];?></td>
					<td><?php if($res2['TOTAL2'] == 0)
					{
						$a = 0;
						echo $a;
					}
					else
					{
						$a=$res1['TOTAL1']/$res2['TOTAL2']*100;
					 	echo round($a, 2) . "%";
					}
					?>
					</td>
				</tr>
				<tr>
					<td>2.</td>
					<td><?php echo $array[1]; ?></td>
					<td><?php echo $res3['TOTAL1'];?></td>
					<td><?php echo $res4['TOTAL2'];?></td>
					<td><?php if($res4['TOTAL2'] == 0)
					{
						$a = 0;
						echo $a;
					}
					else
					{
						$a=$res3['TOTAL1']/$res4['TOTAL2']*100;
					 	echo round($a, 2) . "%";
					}
					?>
					</td>
				</tr>
			</table>