<html>
<head>
	<meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
	<link rel = "stylesheet" type = "text/css" href = "teacherloginstyle.css?version=51">
</head>
<body>
	<div class="row">
		<nav class="navbar navbar-expand navbar-dark fixed-top">
			<a class="navbar-brand" href="teacherlogin.php"><img src="pencil.png" style="width: 30px; height: 30px;"></a>
			  	<ul class="navbar-nav ml-auto">
			    	<li class="nav-item">
			     		<a class="nav-link" href="" style="color: black">Home</a>
			    	</li>
			    	<li class="nav-item active">
						<a class="nav-link" href="teacherlogin.php" style="color: black">Login</a>
			    	</li>
			    	<li class="nav-item">
			      		<a class="nav-link" href="teacherregister.php" style="color: black">Register</a>
			    	</li>
			  	</ul>
		</nav>
	</div>
	<div class = "container">
		<div class = "row">
			<div class = "col-12" align = "center">
				<br><br><br><img src="circle-cropped.png" height="100" width="100">
			</div>
		</div>
	</div>
	<br><h1 align = "center" style = "font-family: monospace; font-size: 30px;">TEACHER LOGIN!</h1>
	<form method = "POST" action = "teacherloginconfirm.php" class = "text-center"> 
		<br><input type = "email" name = "email" placeholder = "Email" required style = "font-family: monospace; font-size: 19px;" autocomplete = "off"><br>
		<br><input type = "password" name = "password" placeholder = "Password" required style = "font-family: monospace; font-size: 19px;" autocomplete = "off"><br>
		<br><input type = "submit" value = "SUBMIT" class = "btn btn-outline-dark" required style = "font-family: monospace; font-size: 19px;"><br>
	</form>
	<div class = "container">
		<div class = "row">
			<div class = "col-12" align = "center">
				<br><a href = "teacherforgotpassword.php" style = "font-family: monospace; font-size: 19px; text-decoration: none; ">Forgot Password?</a>
			</div>
		</div>
		<div class = "row">
			<div class = "col-12" align = "center">
				<br><p style = "font-family: monospace; font-size: 19px;">New?<a href = "teacherregister.php" style = "font-family: monospace; font-size: 19px; text-decoration: none; "> Register Here!</a>
			</div>
		</div>
	</div>
</body>
</html>
	
