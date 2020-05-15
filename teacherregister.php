<html>
<head>
	<meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
	<link rel = "stylesheet" type = "text/css" href = "teacherloginstyle.css">
</head>
<body>
		<div class="row">
				<nav class="navbar navbar-expand navbar-dark fixed-top">
					<a class="navbar-brand" href="register.php"><img src="pencil.png" style="width: 30px; height: 30px;"></a>
			  		<ul class="navbar-nav ml-auto">
			    		<li class="nav-item">
			     			<a class="nav-link" href="" style="color: black">Home</a>
			    		</li>
			    		<li class="nav-item">
			      			<a class="nav-link" href="teacherlogin.php" style="color: black">Login</a>
			    		</li>
			    		<li class="nav-item">
			      			<a class="nav-link active" href="teacherregister.php" style="color: black">Register</a>
			    		</li>
			  		</ul>
				</nav>
			</div>
		</div>
		<div class = "container">
			<div class = "row">
				<br><br>
			</div>
			<div class = "row">
				<div class = "col-md-12"><br>
					<h1 align = "center" style = "font-family: monospace; font-size: 30px;">TEACHER REGISTRATION FORM</h1>
					<form method = "POST" action = "teacherregister1.php" class = "text-center"> 
						<br><input type = "text" name = "name" placeholder = "Name" required style = "font-family: monospace; font-size: 22px;" autocomplete = "off"><br>
						<br><input type = "text" name = "surname" placeholder = "Surname" required style = "font-family: monospace; font-size: 22px;" autocomplete = "off"><br>
						<br><input type = "email" name = "email" placeholder = "Email" required style = "font-family: monospace; font-size: 22px;" autocomplete = "off"><br>
						<br><input type = "password" name = "password" placeholder = "Password" required style = "font-family: monospace; font-size: 22px;" autocomplete = "off"><br>
						<br><input type = "submit" value = "SUBMIT" class = "btn btn-outline-dark" style = "font-family: monospace; font-size: 22px;">
					</form>
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-12" align="center">
					<p style = "font-family: monospace; font-size: 19px;">Have An Account? <a href = "teacherlogin.php" style = "font-family: monospace; font-size: 19px; text-decoration: none;">Sign In.</a>
				</div>
			</div>
		</div>
</body>
</html>