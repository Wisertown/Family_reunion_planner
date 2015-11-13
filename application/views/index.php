<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Smith Family Reunion Page</title>
</head>
<body>
	<head id="head">
		<img class="pic1" src="/assets/img/Smith_family.jpg" alt="The smith family">
	</head>
	<div class="leftnav">
		
	</div>
	<div id="wrapper">
		<h1 id="welc">Welcome Smith Family Member!</h1>
		<div id="portal">
			
			<div id="register">
				<h4>Please Sign in</h4>
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
			<div id="login">
				<h3>Login</h3>
				<form action="Users/login" method="post">
					<p>Username: <input type="text" name="username">
					<p>Password: <input type="password" name="password"></p>
					<input class="btn" type="submit" value="Login">
				</form>
			</div>
			<div>
				<?= $this->session->flashdata("success_message"); ?>
			</div>
			<div id="errors">
				<?= $this->session->flashdata("errors"); ?>
			</div>
		</div>
	</div>
</body>
</html>
