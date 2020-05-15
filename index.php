<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

$first = $_GET['email'];

$sql = $con->query("SELECT name FROM register WHERE Username = '$first'");
$sqll = $con->query("SELECT surname FROM register WHERE Username = '$first'");
$sqlll = $con->query("SELECT class FROM register WHERE Username = '$first'");
$sqllll = $con->query("SELECT rollno FROM register WHERE Username = '$first'");

$sql1 = $sql->fetch_assoc();
$sql2 = $sqll->fetch_assoc();
$sql3 = $sqlll->fetch_assoc();
$sql4 = $sqllll->fetch_assoc();

$result = $sql1['name'];
$result0 = $sql4['rollno'];
$result1 = $result." ".$sql2['surname'];
$result2 = $sql3['class'];?>

<br><h3 align = "center" style = "font-family: monospace; font-size: 30px; color: #FDF6F6;">Welcome, <?php echo $result1 . "."?></h3>
<br><h3 align = "center" style = "font-family: monospace; font-size: 30px; color: #FDF6F6;">Class: <?php echo $result2?> || Roll No: <?php echo $result0?></h3>
<?php?>
<!doctype html>
<html lang="en">
	<head>
	    	<meta charset="utf-8">
	    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<title>The Assignment App</title>
			<style>
				 .dropdown-menu  > a:hover, .dropdown-menu > li > a:focus {
																		    	background-color: #0D5678;
																		  }
	        </style>
	</head>
	<body style="background-color: #343A40">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<div class="dropdown text-center">
	    <br><h3 align = "center" style = "font-family: monospace; font-size: 30px; color: #FDF6F6;">Dashboard</h3>
		<div class="dropdown text-center">
			<br><br>
			<button type="button" class="col-4 btn btn-dark dropdown-toggle" data-toggle="dropdown" style = "font-family: monospace; font-size: 19px;">SUBJECT</button>
			<div class="dropdown-menu" style="background-color: #343A40; border-color: #FDF6F6;">
				<?php if($result2 == 'SE-IT-A' || $result2 == 'SE-IT-B')
				{?>
				<a class="dropdown-item" href="DBMS.php?email=<?php echo $first;?>" style = "font-family: monospace; font-size: 19px; color: #FDF6F6;">DBMS</a>
				<a class="dropdown-item" href="DSA.php?email=<?php echo $first;?>" style = "font-family: monospace; font-size: 19px; color: #FDF6F6;">DSA</a><?php }  
				elseif($result2 == 'TE-IT-A' || $result2 == 'TE-IT-B') 
				{?>
				<a class="dropdown-item" href="ADMT.php?email=<?php echo $first;?>" style = "font-family: monospace; font-size: 19px; color: #FDF6F6;">ADMT</a>
				<a class="dropdown-item" href="CNS.php?email=<?php echo $first;?>" style = "font-family: monospace; font-size: 19px; color: #FDF6F6;">CNS</a>
				<?php }?>
				<!--<a class="dropdown-item" href="AT.php?email=<?php echo $first;?>" style = "font-family: monospace; font-size: 19px; color: #FDF6F6;">Automata Theory</a>
				<a class="dropdown-item" href="PY.php?email=<?php echo $first;?>" style = "font-family: monospace; font-size: 19px; color: #FDF6F6;">Python</a>-->
				
			</div>
			<div class = "col-12" align = "center">
				<br><a href = "attendance.php?email=<?php echo $first;?>&class=<?php echo $result2;?>&fname=<?php echo $result;?>&rollno=<?php echo $result0;?>" style = "font-family: monospace; font-size: 19px; text-decoration: none; ">See Your Attendance</a>
			</div>
			<div class = "col-12" align = "center">
				<br><a href = "passwordreset.php?email=<?php echo $first;?>" style = "font-family: monospace; font-size: 19px; text-decoration: none; ">Reset Password?</a>
			</div>
			<div class = "col-12" align = "center">
				<br><a href = "login.php" style = "font-family: monospace; font-size: 19px; text-decoration: none; ">Logout!</a>
			</div>
		</div>
	</body>	
</html>