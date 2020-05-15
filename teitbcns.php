<?php

include("header.php");
include("db.php");
if(isset($_POST['submit']))
	{

		foreach($_POST['attendance_status'] as $RollNo=>$attendance_status)
		{
			$RNo = $_POST['rollno'][$RollNo];
			$Name = $_POST['names'][$RollNo];
			$date = $_POST['date'];
			
			$output = $con->query("INSERT INTO teitbcns (RollNo, Name, Attendance_Status, Date) VALUES ('$RNo', '$Name', '$attendance_status', '$date')");
		}
		if($output)
		{
				header('thankyou.php');
		}
			else
		{
				echo $con->error;
		}

	}

?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel panel-heading">
			<a class="btn btn-success" href="">View All</a>
		</div>	
		<div class="panel panel-heading">
			<h3 align="center"><strong>Date: </strong> <?php echo $date?> <strong>Class: </strong> <?php echo $class ?> <strong>Subject: </strong> <?php echo $subject ?></h3>
			
		</div>	
		<div class="panel panel-body">
			<form action="teitbcns.php" method="POST">
				<input type="hidden" value="<?php echo $date?>" name="date">
				<table class="table table-striped">
					<th>Roll Number</th><th>Name</th><th>Attendance Status</th>
					<?php $result = $con->query("SELECT * FROM teitbattendance");
						  $counter = 0;
						  while($row = mysqli_fetch_array($result))
						  {
					?>
					<tr>
						<td><?php echo $row['RollNo'] ?></td>
						<input type="hidden" value="<?php echo $row['RollNo'] ?>" name="rollno[]">
						<td><?php echo $row['Name'] ?></td>
						<input type="hidden" value="<?php echo $row['Name'] ?>" name="names[]">
						<td><input type="radio" name="attendance_status[<?php echo $counter?>]" value="Present" required>Present<br>
						<input type="radio" name="attendance_status[<?php echo $counter?>]" value="Absent">Absent</td>
					</tr>
				    <?php $counter++; } ?>
				</table>
				<input type="submit" value="Submit" name="submit" class="btn btn-info">
			</form>
		</div>
	</div>
</div>
