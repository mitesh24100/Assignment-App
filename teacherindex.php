<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

$first = $_GET['email'];

$sql = $con->query("SELECT name FROM teacherregister WHERE Email = '$first'");

$sql1 = $sql->fetch_assoc();

$result = $sql1['name'];

$end = $con->query("SELECT Class FROM teacherclasssubject WHERE Name = '$result'");

$out = $con->query("SELECT Subject FROM teacherclasssubject WHERE Name = '$result'");

$i = 0;
$array = array();

foreach ($end as $end1){

  $array[$i] = $end1['Class'];
  $i++;
}
?>


<br><h3 align = "center" style = "font-family: monospace; font-size: 30px;">Welcome, <?php echo $result . "."?></h3>
<?php?>
<!doctype html>
<html lang="en">
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
			<title>The Assignment App</title>
			<style>
				 .dropdown-menu  > a:hover, .dropdown-menu > li > a:focus {
																		    	background-color: #0D5678;
																		  }
	        </style>

	        <script>
			  var date = new Date();

    		var month = date.getMonth();
    		var day = date.getDate();
    		var year = date.getFullYear();

    		$(document).ready(function (){
    		$("#datepicker").datepicker({
    		dateFormat: 'yy-mm-dd',
     		maxDate : new Date(year, month, day)
			});
			});
            
            function func()
            {
                var a=document.getElementById("input").value;
                if(a==="SE-IT-A" || a==="SE-IT-B")
                {
                    var arr=["Choose Subject", "DBMS", "DSA"];
                }
                else if(a==="TE-IT-A" || a==="TE-IT-B")
                {
                    var arr=["Choose Subject", "CNS", "ADMT"];
                }
               
                var string="";
               	
                for(i=1;i<arr.length;i++)
                {
                    string=string+"<option>"+arr[i]+"</option>";
                }
                string="Select Subject: <select required name='second'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
        	</script>

	</head>
	<body>
		<br><h3 align = "center" style = "font-family: monospace; font-size: 30px;">Dashboard</h3><br>
	    	<div class = "col-12" align = "center" style = "font-family: monospace; font-size: 20px;">
	    		<form action = "teacherindexsubmit.php" method = "POST">
  					Choose Date of Attendance: <input type="text" name="date" id="datepicker" placeholder="Select date here" required><br><br>
  					Choose Class: 
            <select name="class" id="input" onchange="func()" required>
  					<?php foreach($array as $x => $x_value)
            { ?>
            <option value="<?php echo $array[$x]?>"><?php echo $array[$x];?></option>
            <?php echo "<br>";?>
            <?php } 
            ?>
            </select><br>
  					<br><div id="output"></div><br>
  					
  					<br><input type="submit" class = "btn btn-primary">
				  </form>
			  </div>
			<div class = "col-12" align = "center">
				<br><a href = "teacherpasswordreset.php?email=<?php echo $first;?>" style = "font-family: monospace; font-size: 19px; text-decoration: none; ">Reset Password?</a>
			</div>
			<div class = "col-12" align = "center">
				<br><a href = "teacherlogin.php" style = "font-family: monospace; font-size: 19px; text-decoration: none; ">Logout!</a>
			</div>
		</div>
	</body>	
</html>

