<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Admin Page Smith Family Reunion</title>
</head>
<body>
	<div id="register">
		<h4>Please Register or Login</h4>
		<h3>Register</h3>
		<form action="Users/register" method="post">
			<p>Name: <input type="text" name="name"></p>
			<p>Username: <input type="text" name="username"></p>
			<p>Password: <input type="password" name="password"></p>
				<h5>*Password should be at least 8 characters</h5>
			<p>Confirm Password: <input type="password" name="pw_confirm"></p>
			<input class="btn" type="submit" value="Register">
		</form>
	</div>
</body>
</html>