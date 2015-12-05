<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Comment viewer</title>
</head>
<body class="holder">
		<a class="discuss_forum" href="/dashboard"><button class="forum_btn" type="button">Return to Dashboard</button></a>
	<div id="post_display">
		<div class="posts_comms2">
			<?php $date = strtotime($the_post['created_at']); ?>
					
			<h1 class="head_post">By: <?= $the_post['name'] ?></h1>
			<h3 class="head_post4">Subject: <?=$the_post['subject']?></h3>
			<h3 class="head_post4">Post: <?= $the_post['post_data'] ?></h3>
			<h3 class="head_post"><?= $the_post['likecount']?> Likes<h3>
			<h3 class="head_post">Posted at: <?= date('M d Y', $date) ?> </h3>
			
		</div>
	</div>
	<div id="post_display2">
		<div class="show_likes2">

		<h1 class="head_post">People who liked this:</h1>
			 <?php
			 foreach($all_likes as $likers){ ?>
				<h3><?= $likers['u_name'] ?></h3>
			 <?php }?>
		</div>
	</div>
		
	
	<div id="the_wrap4">
		<h1 class="head_post2">Comments:</h1>
			<?php foreach($comms as $pos){ ?>
				<div class="posts_comms2">
					<h3 class="head_post"><b><i>By: </b> <?= $pos['name'] ?></i></h3>
					<h3 class="head_post2"><b><i>Subject: </b> <?= $pos['comment_data'] ?></i></h3>
					<?php $date = strtotime($pos['created_at']); ?>
					<h3 class="head_post2"><b><i>Posted at: <?= date('M d Y', $date) ?></i></b></h3>
				
				</div>
			<?php }?>
	</div>
</body>
</html>