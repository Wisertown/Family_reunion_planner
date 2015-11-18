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
			<h1 id="welc">Welcome To The Smith Family Reunion Page!</h1>
			<div id="portal">
				<div id="login">
					<h3>Please Login</h3>
					<form action="Users/login" method="post">
						<p>Username: <input type="text" name="username">
						<p>Password: <input type="password" name="password"></p>
						<input class="btn" type="submit" value="Login">
					</form>
					<h4>Don't have a username or Password?</h4>
					<h4>Please email Uncle Bob</h4>
					<form method="post">
						From: <input type="from" type="email"/><br />
  					<input name="address" type="hidden" value="aaron.wise253@gmail.com"/><br />
  					Subject: <input name="subject" type="text" /><br />
  					Message:<br />
  					<textarea name="comment" rows="5" cols="40"></textarea><br />
  					<input class="btn" type="submit" value="Submit" />
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
	<a href="Users/admin"><p>admin</p></a>
</body>
</html>
