<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Smith Family Reunion Page</title>
</head>
<body>
	<div id="chunk">
		<head id="head">
			<img class="pic1" src="/assets/img/Smith_family.jpg" alt="The smith family">
		</head>
		
		<div id="wrapper">
			<h1 id="welc">Welcome Smith Family Member!</h1>
			<div id="portal">
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
	</div>
	<a href="/admin"><p>admin</p></a>
</body>
</html>
