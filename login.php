<html>
<head>
	<meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
	<link rel = "stylesheet" type = "text/css" href = "loginstyle.css?version=51">
</head>
<body style="background-color: #343A40">
	<div class="row">
		<nav class="navbar navbar-expand bg-dark navbar-dark fixed-top">
			<a class="navbar-brand" href="login.php"><img src="pencil.png" style="width: 30px; height: 30px;"></a>
			  	<ul class="navbar-nav ml-auto">
			    	<li class="nav-item">
			     		<a class="nav-link" href="">Home</a>
			    	</li>
			    	<li class="nav-item active">
						<a class="nav-link" href="login.php">Login</a>
			    	</li>
			    	<li class="nav-item">
			      		<a class="nav-link" href="register.php">Register</a>
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
	<br><h1 align = "center" style = "font-family: monospace; font-size: 30px; color: #FDF6F6;">STUDENT LOGIN!</h1>
	<form method = "POST" action = "loginconfirm.php" class = "text-center"> 
		<br><input type = "email" name = "email" placeholder = "Email" required style = "font-family: monospace; font-size: 19px;" autocomplete = "off"><br>
		<br><input type = "password" name = "password" placeholder = "Password" required style = "font-family: monospace; font-size: 19px;" autocomplete = "off"><br>
		<br><input type = "submit" value = "SUBMIT" class = "btn btn-outline-dark" required style = "font-family: monospace; font-size: 19px; color: #FDF6F6;"><br>
	</form>
	<div class = "container">
		<div class = "row">
			<div class = "col-12" align = "center">
				<br><a href = "forgotpassword.php" style = "font-family: monospace; font-size: 19px; text-decoration: none; ">Forgot Password?</a>
			</div>
		</div>
		<div class = "row">
			<div class = "col-12" align = "center">
				<br><p style = "font-family: monospace; font-size: 19px; color: #FDF6F6;">New?<a href = "register.php" style = "font-family: monospace; font-size: 19px; text-decoration: none; "> Register Here!</a>
			</div>
		</div>
	</div>
</body>
</html>
	
