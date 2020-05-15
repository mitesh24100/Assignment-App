<?php
$first = $_GET['email'];
?>
<html>
<head>
	<meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
	<link rel = "stylesheet" type = "text/css" href = "teacherloginstyle.css">
</head>
<body>
	<br><h3 align = "center" style = "font-family: monospace; font-size: 30px;">Reset Password</h3><br>
	<form method = "POST" action = "teacherpasswordreset1.php?email=<?php echo $first;?>" class = "text-center"> 
		<br><input type = "password" name = "oldpassword" placeholder = "Previous Password" required style = "font-family: monospace; font-size: 19px;" autocomplete = "off"><br>
		<br><input type = "password" name = "newpassword1" placeholder = "New Password" required style = "font-family: monospace; font-size: 19px;" autocomplete = "off"><br>
		<br><input type = "password" name = "newpassword2" placeholder = "Re-Enter New Password" required style = "font-family: monospace; font-size: 19px;" autocomplete = "off"><br>
		<br><input type = "submit" value = "SUBMIT" class = "btn btn-outline-dark" style = "font-family: monospace; font-size: 22px;"><br>
	</form>
	<div class = "col-12" align = "center">
			<br><h2><a href = "teacherindex.php?email=<?php echo $first;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: #007BFF;"><-- DashBoard!</a><h2>
	</div>
</body>
</html>
