<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h2>Login</h2>

	<form method="POST" action="login.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
	
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Not yet a member? <a href="registration.php">Sign Up</a>
		</p>
	</form>

</body>
</html>