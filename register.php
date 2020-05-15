<html>
<head>
	<meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
	<link rel = "stylesheet" type = "text/css" href = "loginstyle.css">
</head>
<body style="background-color: #343A40">
		<div class="row">
				<nav class="navbar navbar-expand bg-dark navbar-dark fixed-top">
					<a class="navbar-brand" href="register.php"><img src="pencil.png" style="width: 30px; height: 30px;"></a>
			  		<ul class="navbar-nav ml-auto">
			    		<li class="nav-item">
			     			<a class="nav-link" href="">Home</a>
			    		</li>
			    		<li class="nav-item">
			      			<a class="nav-link" href="login.php">Login</a>
			    		</li>
			    		<li class="nav-item">
			      			<a class="nav-link active" href="register.php">Register</a>
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
					<h1 align = "center" style = "font-family: monospace; font-size: 30px; color: #FDF6F6;">STUDENT REGISTRATION FORM</h1>
					<form method = "POST" action = "register1.php" class = "text-center"> 
						<br><input type = "text" name = "name" placeholder = "Name" required style = "font-family: monospace; font-size: 22px;" autocomplete = "off"><br>
						<br><input type = "text" name = "surname" placeholder = "Surname" required style = "font-family: monospace; font-size: 22px;" autocomplete = "off"><br>
						<br><select name = "class" class = "classs" required style = "font-family: monospace; font-size: 22px;">
								<option selected disabled value="Null">Choose Class</option>
								<option value = "SE-IT-A">SE-IT-A</option>
								<option value = "SE-IT-B">SE-IT-B</option>
								<option value = "TE-IT-A">TE-IT-A</option>
								<option value = "TE-IT-B">TE-IT-B</option>
							</select><br>
						<br><input type = "number" name = "roll" placeholder = "Roll No" required style = "font-family: monospace; font-size: 22px;" autocomplete = "off"><br>
						<br><input type = "email" name = "email" placeholder = "Email" required style = "font-family: monospace; font-size: 22px;" autocomplete = "off"><br>
						<br><input type = "password" name = "password" placeholder = "Password" required style = "font-family: monospace; font-size: 22px;" autocomplete = "off"><br>
						<br><input type = "submit" value = "SUBMIT" class = "btn btn-outline-dark" style = "font-family: monospace; font-size: 22px; color: #FDF6F6;">
					</form>
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-12" align="center">
					<p style = "font-family: monospace; font-size: 19px; color: #FDF6F6;">Have An Account? <a href = "login.php" style = "font-family: monospace; font-size: 19px; text-decoration: none;">Sign In.</a>
				</div>
			</div>
		</div>
</body>
</html>