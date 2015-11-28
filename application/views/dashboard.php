<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Vacation Dashboard</title>
</head>
<body>
	<div class="holder">
		<head class="head">
			<img class="beach" src="/assets/img/beach2.jpg" alt="A Beach" >
		</head>
		<div id="the_wrap">
			<div id="text_hold">
				<a href="/Trips/logout_user"><p>Logout</p></a>
				<h1>Hello, <?= $user['name'] ?>!</h1>
				<?php if($user['votes'] > 0){ ?>
					<h2>You have <strong><?= $user["votes"] ?></strong> Votes</h2>
				<?php } else { 
					echo("<h2>You have no more votes!</h2>");
				} ?>
				<div id="your_vacation">
					<h3>Vote for your favorite place!</h3>
					<p>The place with the most votes will be the site of the 2016 Smith family Reunion!</p>
					<div>
						<table class="t_bl">
							<tr>
								<th>Destination</th>
								<th>Description</th>
								<th>link</th>
								<th>Total Votes</th>
								<th>Travel Start Date</th>
								<th>Travel End Date</th>
								<th>Vote For it!</th>
							</tr>
			        	</table>
			        </div>
				</div>
				<br>
				<br>
			<?php if($user['switch'] == 0){?>
				<div class="add_travel">	
					<?php echo('<h3><a href="/add_travelp">Add a Destination</a></h3>'); ?>
				</div>
			<?php } else { ?>
				<div>
					<?php echo("<h3>You can only submit one location</h3>"); ?>
				</div>
			<?php } ?>
			</div>
		</div>
		<footer class="foot">
			<img class="cabin" src="/assets/img/cabin.jpg" alt="A cabin">
		</footer>
	</div>
</body>
</html>