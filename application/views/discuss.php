<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Discussion Page</title>
</head>
<body class="holder">
	<head class="head">
		<img class="beach" src="/assets/img/buckingham.jpg" alt="A palace">
	</head>
	<div id="mid_hold">
		<div id="discuss">
			<a class="discuss_logout" href="/Trips/logout_user"><button class="logout_btn" type="button">Logout</button></a>
			<a class="discuss_forum" href="/dashboard"><button class="forum_btn" type="button">Return to Dashboard</button></a>
			<?php if($user['switch'] == 0){?>
				<a class="discuss_travel" href="/add_travelp"><button class="forum_btn" type="button">Add Travel Plan</button></a>
			<?php } else { ?>

		    <?php } ?>
			<a class="discuss_comms" href="/your_post_comms"><button class="forum_btn">Your Posts</button></a>
			<a class="discuss_help" href="/help"><button class="forum_btn">Need Help?</button></a>
		</div>
		<div id="the_wrap3">
				<div id="createpost">
				<h1>Create A Post</h1>
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
	</div>
	<div id="the_wrap4">
		<div class="head">
			<h1>Hello <?= $user['name'] ?></h1>
			<h1>Here are the Top Posts:</h1>
		</div>
			<?php foreach($posts as $pos){?>
				<br>
				<div class="posts_comms">
					<h3 class="head_post"><b>By: </b> <?= $pos['name'] ?></h3>
					<h3 class="head_post2"><b>Subject: </b> <?= $pos['subject'] ?></h3>
					<h3 class="head_post2"><b>Posted at: <?= $pos['created_at'] ?></b></h3>
					<h4><i><?= $pos['post_data'] ?></i></h4>
					<div class="likes_comms">
					
					<?php if($user_likes){ 
							for($x = 0; $x < count($user_likes); $x++){
								if($pos['po_id'] === $user_likes[$x]['post_id']){?>
									<p class="head_post"><i>Liked!</i></p>
									<?php break; ?>
							<?php }else{ ?>
									<a class="head_post" href="/who_likes/<?= $pos['po_id'] ?>"><p><?= $pos['p_likes'] ?> likes</p></a>
									<?php break; ?>
							<?php } ?>
						<?php } ?>
					<?php } else { ?>
						<a class="head_post" href="/who_likes/<?= $pos['po_id'] ?>"><p><?= $pos['p_likes'] ?> likes</p></a>
					<?php } ?>
						<a class="head_post2" href="Forums/comments/<?= $pos['po_id'] ?>"><p><?= $pos['c_count'] ?> Comments</p></a>
						<form class="head_post3" action="/comment_create/<?= $pos['po_id'] ?>" method="post">
							Comment:<input class="comment" type="text" name="comment_data">
							<input class="comment_submit" type="submit" value="submit">
						</form>
					</div>
				<br>
				</div>
			<?php } ?>
		<br>
	</div>
	<footer>
		<img class="cabin" src="/assets/img/disneyl.jpg" alt="Disney Land">
	</footer>
</body>
</html>