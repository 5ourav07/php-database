<?php
	session_start();

	$username = '';
	$email = '';
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'task');
	
	if(isset($_POST['register']))
	{
		$username = mysqli_real_escape_string($_POST['username']);
		$email = mysqli_real_escape_string($_POST['email']);
		$password1 = mysqli_real_escape_string($_POST['password1']);
		$password2 = mysqli_real_escape_string($_POST['password2']);

		if(empty($username))
		{
			array_push($errors, "Username is required");
		}
		if(empty($email))
		{
			array_push($errors, "Email is required");
		}
		if(empty($password1))
		{
			array_push($errors, "Password is required");
		}
		if(empty($password2))
		{
			array_push($errors, "Password is not Matched!");
		}

		if (count($errors) == 0) 
		{
			$password = md5($password1);
			$sql = "INSERT INTO user(username, email, password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logged IN";
			header('location: index.php');
		}

		if(isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($_POST['username']);
			$password = mysqli_real_escape_string($_POST['password']);

			if(empty($username))
			{
				array_push($errors, "Username is required");
			}
			if(empty($password))
			{
				array_push($errors, "Password is required");
			}
			if (count($errors) == 0) 
			{
				$password = md5($password);
				$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
				$result = mysqli_query($db, $query);
				if (musqli_num_eows($result) == ) 
				{
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "Logged IN";
					header('location: index.php');
				}
				else
				{
					array_push($errors, "Unsuccessful!");
				}
			}
		}
	}
?>