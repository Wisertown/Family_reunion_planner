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
					<form action="Emails/send" method="post">
	  					<input type="hidden" name="to_email" value="wiserton27@gmail.com">
	  					Subject: <input id="subject" class="in" name="subject" type="text" value="Create my account <?php set_value('subject')?>"/><br />

	  					Message:<br />
	  					<textarea id="comment_id" name="comment" contenteditable rows="5" cols="40" value="<?php set_value('comment')?>">My name is : [BLANK] My email address is : [BLANK] and I would like an account. Thank you.
	  					</textarea><br />
	  					<input class="btn" type="submit" value="Submit" />
  					</form>
				</div>
			</div>
	</div>
	<a href="Users/admin"><p>admin</p></a>
</body>
</html>
