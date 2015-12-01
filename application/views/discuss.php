<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Discussion Page</title>
</head>
<body class="holder">
	<div id="discuss">
		<a class="logout" href="/Trips/logout_user"><button class="logout_btn" type="button">Logout</button></a>
		<a class="forum" href="/dashboard"><button class="forum_btn" type="button">Return to Dashboard</button></a>
	</div>
	<head class="head">
		<img class="beach" src="/assets/img/buckingham.jpg" alt="A palace">
	</head>
	<div id="the_wrap3">
		<div id="createpost">
			<h1 class="">Create A Post</h1>
			<form action="/Forums/post_create" method="post">
				<p>Subject:</p><input type="text" name="subject">
				<p>Post:</p><textarea name="post_data" id="" cols="30" rows="4"></textarea>
				<br>
				<input type="submit" class="btn" name="Post">
				<?php if($this->session->flashdata() !== null){ ?>
				
					<div id="g4_errors">
						<?= $this->session->flashdata("errors"); ?>
					</div>
				<?php } else { ?>

				<?php } ?>
			</form>
		</div>
	</div>
	<div id="the_wrap2">
		<div>
			
		<h1>Top posts</h1>
		</div>
	</div>
	<footer>
		<img class="cabin" src="/assets/img/disneyl.jpg" alt="Disney Land">
	</footer>
</body>
</html>