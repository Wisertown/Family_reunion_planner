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
		
		<h1 id="welc">Welcome To The Smith Family Reunion Page!</h1>
			<div class="flash">
				<div>
					<?= $this->session->flashdata("success_message"); ?>
				</div>
				<div id="errors">
					<?= $this->session->flashdata("errors"); ?>
				</div>
			</div>
			<div class="loginbubble">
				<div id="login">
					<h3>Please Login</h3>
					<form action="Users/login" method="post">
						<p>Username: <input class="in" type="text" name="username">
						<p>Password: <input class="in" type="password" name="password"></p>
						<input class="btn" type="submit" value="Login">
					</form>
				</div>
			</div>
			<div class="emailbubble">
				<div id="email">
					<h3>Don't have a username or Password?</h3>
					<h4>Please email Uncle Bob</h4>
					<form actionmethod="post">
						From: <input class="in" type="from" type="email"/><br />
	  					<input class="in" name="address" type="hidden" value="aaron.wise253@gmail.com"/><br />
	  					Subject: <input class="in" name="subject" type="text" /><br />
	  					<br>
	  					Message:<br />
	  					<textarea name="comment" rows="5" cols="40"></textarea><br />
	  					<input class="btn" type="submit" value="Submit" />
  					</form>
				</div>
			</div>
		
	</div>
	<a href="Users/admin"><p>admin</p></a>
</body>
</html>
