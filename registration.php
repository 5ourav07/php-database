<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h2>Register</h2>

	<form method="POST" action="registration.php">
		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password1">
		</div>
		<div class="input-group">
			<label>ConfirmPassword</label>
			<input type="password" name="password2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign In</a>
		</p>
	</form>

</body>
</html>